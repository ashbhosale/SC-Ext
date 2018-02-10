<?php
namespace ServiceChargeExtension\Servicechargeextension\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Mayank, Aishwarya <mayank.khurana@hof-university.de>
 */
class ServiceChargeModelControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ServiceChargeExtension\Servicechargeextension\Controller\ServiceChargeModelController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\ServiceChargeExtension\Servicechargeextension\Controller\ServiceChargeModelController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllServiceChargeModelsFromRepositoryAndAssignsThemToView()
    {

        $allServiceChargeModels = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $serviceChargeModelRepository = $this->getMockBuilder(\ServiceChargeExtension\Servicechargeextension\Domain\Repository\ServiceChargeModelRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $serviceChargeModelRepository->expects(self::once())->method('findAll')->will(self::returnValue($allServiceChargeModels));
        $this->inject($this->subject, 'serviceChargeModelRepository', $serviceChargeModelRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('serviceChargeModels', $allServiceChargeModels);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenServiceChargeModelToView()
    {
        $serviceChargeModel = new \ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('serviceChargeModel', $serviceChargeModel);

        $this->subject->showAction($serviceChargeModel);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenServiceChargeModelToServiceChargeModelRepository()
    {
        $serviceChargeModel = new \ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel();

        $serviceChargeModelRepository = $this->getMockBuilder(\ServiceChargeExtension\Servicechargeextension\Domain\Repository\ServiceChargeModelRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $serviceChargeModelRepository->expects(self::once())->method('add')->with($serviceChargeModel);
        $this->inject($this->subject, 'serviceChargeModelRepository', $serviceChargeModelRepository);

        $this->subject->createAction($serviceChargeModel);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenServiceChargeModelToView()
    {
        $serviceChargeModel = new \ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('serviceChargeModel', $serviceChargeModel);

        $this->subject->editAction($serviceChargeModel);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenServiceChargeModelInServiceChargeModelRepository()
    {
        $serviceChargeModel = new \ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel();

        $serviceChargeModelRepository = $this->getMockBuilder(\ServiceChargeExtension\Servicechargeextension\Domain\Repository\ServiceChargeModelRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $serviceChargeModelRepository->expects(self::once())->method('update')->with($serviceChargeModel);
        $this->inject($this->subject, 'serviceChargeModelRepository', $serviceChargeModelRepository);

        $this->subject->updateAction($serviceChargeModel);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenServiceChargeModelFromServiceChargeModelRepository()
    {
        $serviceChargeModel = new \ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel();

        $serviceChargeModelRepository = $this->getMockBuilder(\ServiceChargeExtension\Servicechargeextension\Domain\Repository\ServiceChargeModelRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $serviceChargeModelRepository->expects(self::once())->method('remove')->with($serviceChargeModel);
        $this->inject($this->subject, 'serviceChargeModelRepository', $serviceChargeModelRepository);

        $this->subject->deleteAction($serviceChargeModel);
    }
}
