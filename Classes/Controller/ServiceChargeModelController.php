<?php
namespace ServiceChargeExtension\Servicechargeextension\Controller;

/***
 *
 * This file is part of the "ServiceChargeExtension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Mayank, Aishwarya <mayank.khurana@hof-university.de>, Hochschule Hof
 *
 ***/

/**
 * ServiceChargeModelController
 */
class ServiceChargeModelController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * serviceChargeModelRepository
     *
     * @var \ServiceChargeExtension\Servicechargeextension\Domain\Repository\ServiceChargeModelRepository
     * @inject
     */
    protected $serviceChargeModelRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $serviceChargeModels = $this->serviceChargeModelRepository->findAll();
        $this->view->assign('serviceChargeModels', $serviceChargeModels);
    }

    /**
     * action show
     *
     * @param \ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel $serviceChargeModel
     * @return void
     */
    public function showAction(\ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel $serviceChargeModel)
    {
        $this->view->assign('serviceChargeModel', $serviceChargeModel);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel $newServiceChargeModel
     * @return void
     */
    public function createAction(\ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel $newServiceChargeModel)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->serviceChargeModelRepository->add($newServiceChargeModel);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel $serviceChargeModel
     * @ignorevalidation $serviceChargeModel
     * @return void
     */
    public function editAction(\ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel $serviceChargeModel)
    {
        $this->view->assign('serviceChargeModel', $serviceChargeModel);
    }

    /**
     * action update
     *
     * @param \ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel $serviceChargeModel
     * @return void
     */
    public function updateAction(\ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel $serviceChargeModel)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->serviceChargeModelRepository->update($serviceChargeModel);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel $serviceChargeModel
     * @return void
     */
    public function deleteAction(\ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel $serviceChargeModel)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->serviceChargeModelRepository->remove($serviceChargeModel);
        $this->redirect('list');
    }

    /**
     * action
     *
     * @return void
     */
    public function Action()
    {

    }
}
