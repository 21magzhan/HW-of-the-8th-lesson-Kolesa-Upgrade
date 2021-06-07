<?php
namespace Page\Acceptance;

class LoginPage
{
    /**
     * login page url
     * @var string
     */
    public static $loginURL = 'index.php?controller=authentication&back=my-account';

    /**
     * user email address
     * @var string
     */
    public static $loginEmailAddress = '//*[@id="email"]';

    /**
     * user password
     * @var string
     */
    public static $loginPassword = '//*[@id="passwd"]';

    /**
     * sign in button
     * @var string
     */
    public static $signInButton = '//*[@id="SubmitLogin"]/span';

    /**
     * @var string
     */
    public static $homePage = 'a[class="home"]';

    /**
     * my account
     * @var string
     */
    public static $accountWishlist = '//*[@id="header"]/div[2]/div/div/nav/div[1]/a';

    /**
     * my wishlist button, where wishlist items where added
     * @var string
     */
    public static $myWishlists = '//*[@id="center_column"]/div/div[2]/ul/li/a';

    /**
     * total amount of items added to the wishlist
     * @var string
     */
    public static $wishTotal = 'td[class="bold align_center"]';

    /**
     * getting back to myAcoount to delete the wishlist items
     * @var string
     */
    public static $myAccountURL = 'index.php?controller=my-account';

    /**
     * delete items from wishlist
     * @var string
     */
    public static $deleteWish = '//i[@class="icon-remove"]';

    /**
     * log out
     * @var string
     */
    public static $signOut = '//a[@class="logout"]';

}
