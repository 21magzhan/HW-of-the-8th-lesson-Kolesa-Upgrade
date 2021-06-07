<?php

use Codeception\Step;
use Page\Acceptance\ClothesPage;
use Page\Acceptance\LoginPage;
use Page\Acceptance\ShoppingListPage;
use Step\Acceptance\ShoppingStep;

use function PHPUnit\Framework\logicalOr;

/**
 * @group test2
 * class for shopping
 */
class AddToWishlistCest
{
    public function _before(\AcceptanceTester $I)
    {
        $I->amOnPage(LoginPage::$loginURL);
        $I->seeElement(LoginPage::$loginEmailAddress);
        $I->fillField(LoginPage::$loginEmailAddress, 'magzhanomirtay@gmail.com');
        $I->seeElement(LoginPage::$loginPassword);
        $I->fillField(LoginPage::$loginPassword, 'Magzhan1997$');
        $I->click(LoginPage::$signInButton);
        $I->click(LoginPage::$homePage);
    }

    public const PRODUCTS_NMB = 2;
    /**
     * check total amount of dresses added to the cart
     */
    public function checkWishlist(\Step\Acceptance\WishlistStep $I)
    {
       $I->AddToWishlist();

       $I->waitForElementVisible(LoginPage::$accountWishlist);
       $I->click(LoginPage::$accountWishlist);
       $I->waitForElementVisible(LoginPage::$myWishlists);
       $I->click(LoginPage::$myWishlists);


        
        $sum = 0;
        $wishTotal = $I->grabTextFrom(LoginPage::$wishTotal);
        $sum += $wishTotal;
        $I->assertEquals(self::PRODUCTS_NMB, $sum, 'check if they are equal');
    }

    public function _after(\AcceptanceTester $I)
    {
        $I->waitForElementVisible(LoginPage::$deleteWish);
        $I->click(LoginPage::$deleteWish);
        $I->acceptPopup();
        $I->waitForElementVisible(LoginPage::$signOut);
        $I->click(LoginPage::$signOut);
    }
}
