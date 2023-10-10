<?php

namespace App\Controller;

use App\Entity\Album;
use App\Repository\AlbumRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlbumController extends AbstractController
{
    /**
     * @Route("/album", name="app_album")
     */
    public function index(): Response
    {
        return $this->render('album/index.html.twig', [
            'controller_name' => 'AlbumController',
        ]);
    }

    /**
     * @Route("/albums", name="albums" ,methods={"GET"})
     */
    public function listealbums(AlbumRepository $repo)
    {
        $albums=$repo->findAll();
        return $this->render('album/listeAlbums.html.twig', [
            'lesAlbums' => $albums
            
        ]);
    }

    /**
     * @Route("/albums/{id}", name="ficheAlbum" ,methods={"GET"})
     */
    public function Fichealbum(Album $album)
    {
        return $this->render('album/ficheAlbum.html.twig', [
            'leAlbum' => $album
            
        ]);
    }
}
