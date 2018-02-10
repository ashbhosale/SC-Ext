<?php
namespace ServiceChargeExtension\Servicechargeextension\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Mayank, Aishwarya <mayank.khurana@hof-university.de>
 */
class ServiceChargeModelTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ServiceChargeExtension\Servicechargeextension\Domain\Model\ServiceChargeModel();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getServicetypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getServicetype()
        );
    }

    /**
     * @test
     */
    public function setServicetypeForStringSetsServicetype()
    {
        $this->subject->setServicetype('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'servicetype',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getChargesinINRReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getChargesinINR()
        );
    }

    /**
     * @test
     */
    public function setChargesinINRForIntSetsChargesinINR()
    {
        $this->subject->setChargesinINR(12);

        self::assertAttributeEquals(
            12,
            'chargesinINR',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMindaystodeliverReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getMindaystodeliver()
        );
    }

    /**
     * @test
     */
    public function setMindaystodeliverForIntSetsMindaystodeliver()
    {
        $this->subject->setMindaystodeliver(12);

        self::assertAttributeEquals(
            12,
            'mindaystodeliver',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRangeofareainkmReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getRangeofareainkm()
        );
    }

    /**
     * @test
     */
    public function setRangeofareainkmForIntSetsRangeofareainkm()
    {
        $this->subject->setRangeofareainkm(12);

        self::assertAttributeEquals(
            12,
            'rangeofareainkm',
            $this->subject
        );
    }
}
