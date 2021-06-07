<?php
namespace Page\Acceptance;

class ClothesPage
{
    /* Page with dresses
     *
     * @var string
     */
    public static $clothesURL = 'index.php';

    /* moving over elements to see the icons "add to cart"
     *
     * @var string
     */
    public static $seeQuickViewIcon = '//*[@id="homefeatured"]/li[%s]';

    /* the first dress
     *
     * @var string
     */
    public static $productCard = '//*[@id="homefeatured"]/li[%s]';

    /* adding dresses to the cart
     * @var string
     * 
     */
    public static $quickViewButton = '//*[@id="homefeatured"]/li[%s]/div/div[1]/div/a[2]';

    /**
     * switch to iframe
     * @var string
     * @param
     */
    public static $switchToIframe = '//*[@class="fancybox-iframe"]';

    /**
     * modal of successfull addition the shopping cart
     * @var string
     */
     public static $addToWishlistButton = '//*[@id="wishlist_button"]';

     /**
      * message of successfull addition of the dresss to the cart
      * @var string
      */
      public static $closeMessage = '#product > div.fancybox-overlay.fancybox-overlay-fixed > div > div > a';

     /**
      * go back to shopping button selector
      * @var string
      */
      public static $continueShoppingButton = '//*[@id="product"]/div[2]/div/div/a';

      /**
       * close overview window
       * @var string
       */
      public static $closeOverview = '//*[@id="index"]/div[2]/div/div/a';

}
