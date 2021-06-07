<?php
namespace Step\Acceptance;

use Page\Acceptance\LoginPage;
use Page\Acceptance\ClothesPage;
use Page\Acceptance\ShoppingListPage;

class WishlistStep extends \AcceptanceTester
{
    public const PRODUCTS_NMB = 2;

    public function AddToWishlist()
    {
        $I = $this;
        
        for($i = 1; $i<=self::PRODUCTS_NMB; $i++)
        {
            $I->moveMouseOver(sprintf(ClothesPage::$productCard, $i));
            $I->waitForElement(sprintf(ClothesPage::$productCard, $i));
            $I->click(sprintf(ClothesPage::$quickViewButton, $i));
            $I->switchToIFrame(ClothesPage::$switchToIframe);
            $I->wait(2);
            $I->waitForElementClickable(ClothesPage::$addToWishlistButton);
            $I->click(ClothesPage::$addToWishlistButton);
            $I->waitForElementVisible(ClothesPage::$closeMessage);
            $I->click(ClothesPage::$closeMessage);
            $I->switchToIFrame();
            $I->waitForElementVisible(ClothesPage::$closeOverview);
            $I->click(ClothesPage::$closeOverview);
            $I->wait(2);
        }
    }
}