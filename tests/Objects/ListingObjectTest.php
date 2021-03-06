<?php

namespace ZpgRtf\Tests\Objects;

use ZpgRtf\Helpers\DateTimeHelper;
use ZpgRtf\Objects\AreasObject;
use ZpgRtf\Objects\ContentObject;
use ZpgRtf\Objects\DescriptionObject;
use ZpgRtf\Objects\EpcRatingsObject;
use ZpgRtf\Objects\GoogleStreetViewObject;
use ZpgRtf\Objects\LeaseExpiryObject;
use ZpgRtf\Objects\ListingObject;
use PHPUnit\Framework\TestCase;
use ZpgRtf\Objects\LocationObject;
use ZpgRtf\Objects\MinimumContractLengthObject;
use ZpgRtf\Objects\PricingObject;
use ZpgRtf\Objects\ServiceChargeObject;
use ZpgRtf\Objects\TenantEligibilityObject;

class ListingObjectTest extends TestCase
{
    /**
     * @var ListingObject
     */
    protected $object;

    public function setUp()
    {
        $this->object = new ListingObject();
    }

    public function testCanInstantiate()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object
        );
    }

    public function testCanSetAccessibility()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setAccessibility(true)
        );

        $this->assertTrue(
            $this->object->hasAccessibility()
        );
    }

    public function testCanSetAdministrationFees()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setAdministrationFees('£10 per person')
        );

        $this->assertStringStartsWith(
            '£10 per person',
            $this->object->getAdministrationFees()
        );
    }

    public function testCanSetAnnualBusinessRates()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setAnnualBusinessRates(150.00)
        );

        $this->assertGreaterThan(
            149.99,
            $this->object->getAnnualBusinessRates()
        );
    }

    public function testCanSetAreas()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setAreas(new AreasObject())
        );

        $this->assertInstanceOf(
            AreasObject::class,
            $this->object->getAreas()
        );
    }

    public function testCanSetAvailableBedrooms()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setAvailableBedrooms(3)
        );

        $this->assertGreaterThan(
            2,
            $this->object->getAvailableBedrooms()
        );
    }

    public function testCanSetAvailableFromDate()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setAvailableFromDate(new DateTimeHelper('+6 month', new \DateTimeZone('UTC')))
        );

        $this->assertInstanceOf(
            DateTimeHelper::class,
            $this->object->getAvailableFromDate()
        );
    }

    public function testCanSetBasement()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setBasement(true)
        );

        $this->assertTrue(
            $this->object->hasBasement()
        );
    }

    public function testCanSetBathrooms()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setBathrooms(4)
        );

        $this->assertGreaterThan(
            3,
            $this->object->getBathrooms()
        );
    }

    public function testCanSetBillsIncluded()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setBillsIncluded(['water', 'tv_licence'])
        );

        $this->assertSameSize(
            ['water', 'tv_licence'],
            $this->object->getBillsIncluded()
        );
    }

    public function testCanSetBranchReference()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setBranchReference('12345')
        );

        $this->assertStringStartsWith(
            '12345',
            $this->object->getBranchReference()
        );
    }

    public function testCanSetBurglarAlarm()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setBurglarAlarm(true)
        );

        $this->assertTrue(
            $this->object->hasBurglarAlarm()
        );
    }

    public function testCanSetBusinessForSale()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setBusinessForSale(true)
        );

        $this->assertTrue(
            $this->object->isBusinessForSale()
        );
    }

    public function testCanSetBuyerIncentives()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setBuyerIncentives(['equity_loan', 'help_to_buy'])
        );

        $this->assertSameSize(
            ['equity_loan', 'help_to_buy'],
            $this->object->getBuyerIncentives()
        );
    }

    public function testCanSetCategory()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setCategory('residential')
        );

        $this->assertStringStartsWith(
            'residential',
            $this->object->getCategory()
        );
    }

    public function testCanSetCentralHeating()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setCentralHeating('full')
        );

        $this->assertStringStartsWith(
            'full',
            $this->object->getCentralHeating()
        );
    }

    public function testCanSetChainFree()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setChainFree(true)
        );

        $this->assertTrue(
            $this->object->isChainFree()
        );
    }

    public function testCanSetCommercialUseClasses()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setCommercialUseClasses(['A2', 'B4'])
        );

        $this->assertSameSize(
            ['A2', 'B4'],
            $this->object->getCommercialUseClasses()
        );
    }

    public function testCanSetConnectedUtilities()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setConnectedUtilities(['fibre_optic', 'gas'])
        );

        $this->assertSameSize(
            ['fibre_optic', 'gas'],
            $this->object->getConnectedUtilities()
        );
    }

    public function testCanSetConservatory()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setConservatory(true)
        );

        $this->assertTrue(
            $this->object->hasConservatory()
        );
    }

    public function testCanSetConstructionYear()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setConstructionYear(2015)
        );

        $this->assertGreaterThan(
            0,
            $this->object->getConstructionYear()
        );
    }

    public function testCanSetContent()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setContent([new ContentObject()])
        );

        $this->assertSameSize(
            [new ContentObject()],
            $this->object->getContent()
        );
    }

    public function testCanSetCouncilTaxBand()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setCouncilTaxBand('E')
        );

        $this->assertStringStartsWith(
            'E',
            $this->object->getCouncilTaxBand()
        );
    }

    public function testCanSetDecorativeCondition()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setDecorativeCondition('excellent')
        );

        $this->assertStringStartsWith(
            'excellent',
            $this->object->getDecorativeCondition()
        );
    }

    public function testCanSetDeposit()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setDeposit(500.00)
        );

        $this->assertGreaterThan(
            499.99,
            $this->object->getDeposit()
        );
    }

    public function testCanSetDetailedDescription()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setDetailedDescription([new DescriptionObject()])
        );

        $this->assertSameSize(
            [new DescriptionObject()],
            $this->object->getDetailedDescription()
        );
    }

    public function testCanSetDisplayAddress()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setDisplayAddress('22 Test Street, Somewhere, QQ1 1ZZ')
        );

        $this->assertStringStartsWith(
            '22 Test Street, Somewhere, QQ1 1ZZ',
            $this->object->getDisplayAddress()
        );
    }

    public function testCanSetDoubleGlazing()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setDoubleGlazing(true)
        );

        $this->assertTrue(
            $this->object->hasDoubleGlazing()
        );
    }

    public function testCanSetEpcRatings()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setEpcRatings(new EpcRatingsObject())
        );

        $this->assertInstanceOf(
            EpcRatingsObject::class,
            $this->object->getEpcRatings()
        );
    }

    public function testCanSetFeatureList()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setFeatureList(['Newly carpeted throughout', 'Remodelled kitchen'])
        );

        $this->assertSameSize(
            ['Newly carpeted throughout', 'Remodelled kitchen'],
            $this->object->getFeatureList()
        );
    }

    public function testCanSetFireplace()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setFireplace(true)
        );

        $this->assertTrue(
            $this->object->hasFireplace()
        );
    }

    public function testCanSetFishingRights()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setFishingRights(true)
        );

        $this->assertTrue(
            $this->object->hasFishingRights()
        );
    }

    public function testCanSetFloorLevels()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setFloorLevels(['basement', 'ground', 1, 2])
        );

        $this->assertSameSize(
            ['basement', 'ground', 1, 2],
            $this->object->getFloorLevels()
        );
    }

    public function testCanSetFloors()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setFloors(4)
        );

        $this->assertGreaterThan(
            3,
            $this->object->getFloors()
        );
    }

    public function testCanSetFurnishedState()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setFurnishedState('furnished')
        );

        $this->assertStringStartsWith(
            'furnished',
            $this->object->getFurnishedState()
        );
    }

    public function testCanSetGoogleStreetView()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setGoogleStreetView(new GoogleStreetViewObject())
        );

        $this->assertInstanceOf(
            GoogleStreetViewObject::class,
            $this->object->getGoogleStreetView()
        );
    }

    public function testCanSetGroundRent()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setGroundRent(795.95)
        );

        $this->assertGreaterThan(
            795.94,
            $this->object->getGroundRent()
        );
    }

    public function testCanSetGym()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setGym(true)
        );

        $this->assertTrue(
            $this->object->hasGym()
        );
    }

    public function testCanSetLeaseExpiry()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setLeaseExpiry(new LeaseExpiryObject())
        );

        $this->assertInstanceOf(
            LeaseExpiryObject::class,
            $this->object->getLeaseExpiry()
        );
    }

    public function testCanSetLifeCycleStatus()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setLifeCycleStatus('available')
        );

        $this->assertStringStartsWith(
            'available',
            $this->object->getLifeCycleStatus()
        );
    }

    public function testCanSetListedBuildingGrade()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setListedBuildingGrade('grade_a')
        );

        $this->assertStringStartsWith(
            'grade_a',
            $this->object->getListedBuildingGrade()
        );
    }

    public function testCanSetListingReference()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setListingReference('listing-12345')
        );

        $this->assertStringStartsWith(
            'listing-12345',
            $this->object->getListingReference()
        );
    }

    public function testCanSetLivingRooms()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setLivingRooms(1)
        );

        $this->assertGreaterThan(
            0,
            $this->object->getLivingRooms()
        );
    }

    public function testCanSetLocation()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setLocation(new LocationObject())
        );

        $this->assertInstanceOf(
            LocationObject::class,
            $this->object->getLocation()
        );
    }

    public function testCanSetLoft()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setLoft(true)
        );

        $this->assertTrue(
            $this->object->hasLoft()
        );
    }

    public function testCanSetNewHome()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setNewHome(true)
        );

        $this->assertTrue(
            $this->object->isNewHome()
        );
    }

    public function testCanSetOpenDay()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setOpenDay(new DateTimeHelper('+1 month', new \DateTimeZone('UTC')))
        );

        $this->assertInstanceOf(
            DateTimeHelper::class,
            $this->object->getOpenDay()
        );
    }

    public function testCanSetOutbuildings()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setOutbuildings(true)
        );

        $this->assertTrue(
            $this->object->hasOutbuildings()
        );
    }

    public function testCanSetOutsideSpace()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setOutsideSpace(['roof_terrace'])
        );

        $this->assertSameSize(
            ['roof_terrace'],
            $this->object->getOutsideSpace()
        );
    }

    public function testCanSetParking()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setParking(['off_street_parking', 'single_garage'])
        );

        $this->assertSameSize(
            ['off_street_parking', 'single_garage'],
            $this->object->getParking()
        );
    }

    public function testCanSetPetsAllowed()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setPetsAllowed(true)
        );

        $this->assertTrue(
            $this->object->isPetsAllowed()
        );
    }

    public function testCanSetPorterSecurity()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setPorterSecurity(true)
        );

        $this->assertTrue(
            $this->object->hasPorterSecurity()
        );
    }

    public function testCanSetPricing()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setPricing(new PricingObject())
        );

        $this->assertInstanceOf(
            PricingObject::class,
            $this->object->getPricing()
        );
    }

    public function testCanSetPropertyType()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setPropertyType('end_terrace')
        );

        $this->assertStringStartsWith(
            'end_terrace',
            $this->object->getPropertyType()
        );
    }

    public function testCanSetRateableValue()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setRateableValue(10000.00)
        );

        $this->assertGreaterThan(
            9999.99,
            $this->object->getRateableValue()
        );
    }

    public function testCanSetRentalTerm()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setRentalTerm(new MinimumContractLengthObject())
        );

        $this->assertInstanceOf(
            MinimumContractLengthObject::class,
            $this->object->getRentalTerm()
        );
    }

    public function testCanSetRepossession()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setRepossession(true)
        );

        $this->assertTrue(
            $this->object->isRepossession()
        );
    }

    public function testCanSetRetirement()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setRetirement(true)
        );

        $this->assertTrue(
            $this->object->isRetirement()
        );
    }

    public function testCanSetSapRating()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setSapRating(1)
        );

        $this->assertGreaterThan(
            0,
            $this->object->getSapRating()
        );
    }

    public function testCanSetServiceCharge()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setServiceCharge(new ServiceChargeObject())
        );

        $this->assertInstanceOf(
            ServiceChargeObject::class,
            $this->object->getServiceCharge()
        );
    }

    public function testCanSetServiced()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setServiced(true)
        );

        $this->assertTrue(
            $this->object->isServiced()
        );
    }

    public function testCanSetSharedAccommodation()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setSharedAccommodation(true)
        );

        $this->assertTrue(
            $this->object->isSharedAccommodation()
        );
    }

    public function testCanSetSummaryDescription()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setSummaryDescription('Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro.')
        );

        $this->assertStringStartsWith(
            'Zombie ipsum reversus',
            $this->object->getSummaryDescription()
        );
    }

    public function testCanSetSwimmingPool()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setSwimmingPool(true)
        );

        $this->assertTrue(
            $this->object->hasSwimmingPool()
        );
    }

    public function testCanSetTenanted()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setTenanted(true)
        );

        $this->assertTrue(
            $this->object->isTenanted()
        );
    }

    public function testCanSetTenantEligibility()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setTenantEligibility(new TenantEligibilityObject())
        );

        $this->assertInstanceOf(
            TenantEligibilityObject::class,
            $this->object->getTenantEligibility()
        );
    }

    public function testCanSetTennisCourt()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setTennisCourt(true)
        );

        $this->assertTrue(
            $this->object->hasTennisCourt()
        );
    }

    public function testCanSetTenure()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setTenure('freehold')
        );

        $this->assertStringStartsWith(
            'freehold',
            $this->object->getTenure()
        );
    }

    public function testCanSetTotalBedrooms()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setTotalBedrooms(3)
        );

        $this->assertGreaterThan(
            2,
            $this->object->getTotalBedrooms()
        );
    }

    public function testCanSetUtilityRoom()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setUtilityRoom(true)
        );

        $this->assertTrue(
            $this->object->hasUtilityRoom()
        );
    }

    public function testCanSetWaterfront()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setWaterfront(true)
        );

        $this->assertTrue(
            $this->object->isWaterfront()
        );
    }

    public function testCanSetWoodFloors()
    {
        $this->assertInstanceOf(
            ListingObject::class,
            $this->object->setWoodFloors(true)
        );

        $this->assertTrue(
            $this->object->hasWoodFloors()
        );
    }

    public function testCanJsonSerialize()
    {
        $this->assertJson(
            json_encode($this->object)
        );

        $this->assertInstanceOf(
            \JsonSerializable::class,
            $this->object
        );
    }
}
