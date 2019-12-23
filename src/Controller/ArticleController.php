<?php
namespace App\Controller;

  // use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as AbC;

class ArticleController extends AbC{
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index(){
       /*  return new Response(
            'Ceva aici'
        ); */
        $articles = ['Article 1', 'Article 2'];
      return $this->render('articles/index.html.twig',array('articles' => $articles) );
    }
}