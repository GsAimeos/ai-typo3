<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Metaways Infosystems GmbH, 2013
 * @copyright Aimeos (aimeos.org), 2014
 */


/**
 * Test class for MW_Common_Criteria_Plugin_T3Salutation
 */
class MW_Common_Criteria_Plugin_T3SalutationTest extends MW_Unittest_Testcase
{
	private $object;


	/**
	 * Sets up the fixture. This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new MW_Common_Criteria_Plugin_T3Salutation();
	}


	/**
	 * Tears down the fixture. This method is called after a test is executed.
	 */
	protected function tearDown()
	{
		unset($this->object);
	}


	public function testTranslate()
	{
		$this->assertEquals( 99, $this->object->translate( MShop_Common_Item_Address_Abstract::SALUTATION_UNKNOWN ) );
	}


	public function testTranslateCompany()
	{
		$this->assertEquals( 99, $this->object->translate( MShop_Common_Item_Address_Abstract::SALUTATION_COMPANY ) );
	}


	public function testTranslateMale()
	{
		$this->assertEquals( 0, $this->object->translate( MShop_Common_Item_Address_Abstract::SALUTATION_MR ) );
	}


	public function testTranslateFemale()
	{
		$this->assertEquals( 1, $this->object->translate( MShop_Common_Item_Address_Abstract::SALUTATION_MRS ) );
		$this->assertEquals( 1, $this->object->translate( MShop_Common_Item_Address_Abstract::SALUTATION_MISS ) );
	}


	public function testReverse()
	{
		$this->assertEquals( MShop_Common_Item_Address_Abstract::SALUTATION_UNKNOWN, $this->object->reverse( 99 ) );
	}


	public function testReverseMale()
	{
		$this->assertEquals( MShop_Common_Item_Address_Abstract::SALUTATION_MR, $this->object->reverse( 0 ) );
	}


	public function testReverseFemale()
	{
		$this->assertEquals( MShop_Common_Item_Address_Abstract::SALUTATION_MRS, $this->object->reverse( 1 ) );
	}
}
