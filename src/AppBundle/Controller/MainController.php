<?php

namespace AppBundle\Controller;

use AppBundle\Exception\NoCookieForYou;
use AppBundle\Exception\NoCookiesLeft;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }

    /**
     * @Route("crazy-dave")
     */
    public function cookiesAction()
    {
        $route = $this->generateUrl('blog', ['page' => 1 , 'title'=>'a title']);
        die($route);
        try{

            if(random_int(0,1)){
                throw new NoCookieForYou();
            }
            throw new NoCookiesLeft();
        }catch (NoCookieForYou | NoCookiesLeft $exception){
            $wisper = $exception->getMessage();
        }

        return new Response('<html><body>'.$wisper.'</body></html>');

    }

    /**
     * @Route("blog/{page}", name="blog")
     */
    public function testAction(Request $request)
    {
        dump($request);die;

    }
}