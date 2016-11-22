<?php
/**
 * Created by PhpStorm.
 * User: laurentc
 * Date: 18/11/16
 * Time: 16:44
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Aventure;
use AppBundle\Service\GenericHydrator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AventureController
 * @package AppBundle\Controller
 */
class AventureApiController extends Controller
{

    /**
     * @Route(
     *  "/api/aventures/",
     *  name = "aventures_api_list",
     *  methods = { "GET" }
     * )
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function listAction(Request $request)
    {
        $aventures = $this->get('doctrine.orm.default_entity_manager')->getRepository('AppBundle:Aventure')->findAll();

        return new JsonResponse($aventures);
    }

    /**
     * @Route(
     *  "/api/aventures/{id}",
     *  name = "aventures_api_get",
     *  methods = "GET"
     * )
     *
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function getAction(Request $request, $id)
    {
        $aventure = $this->get('doctrine.orm.default_entity_manager')->getRepository('AppBundle:Aventure')->find($id);

        if($aventure === null){
            return new Response(null, 404);
        }

        return new JsonResponse($aventure);
    }

    /**
     * @Route(
     *  "/api/aventures",
     *  name = "aventures_api_create",
     *  methods = "POST"
     * )
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function createAction(Request $request)
    {
        $datas = json_decode($request->getContent(), true);
        $aventure = $this->get("aventure.factory")->get($datas);
        $this->get('doctrine.orm.default_entity_manager')->persist($aventure);
        $this->get('doctrine.orm.default_entity_manager')->flush();
        $response = new JsonResponse($aventure, 201);
        $response->headers->set('Location', $this->generateUrl('aventures_api_get', ['id' => $aventure->getId()]));

        return $response;
    }

    /**
     * @Route(
     *  "/api/aventures/{id}",
     *  name = "aventures_api_delete",
     *  methods = { "DELETE" },
     *  requirements = {"id" = "\d+" }
     * )
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function deleteAction(Request $request, $id)
    {
        $aventure = $this->get('doctrine.orm.default_entity_manager')->getRepository('AppBundle:Aventure')->find($id);
        if($aventure === null){
            return new Response(null, 404);
        }
        $this->get('doctrine.orm.default_entity_manager')->remove($aventure);
        $this->get('doctrine.orm.default_entity_manager')->flush();

        return new Response(null, 204);
    }

    /**
     * @Route(
     *  "/api/aventures/{id}",
     *  name = "aventures_api_update",
     *  methods = { "PUT" },
     *  requirements = {"id" = "\d+" }
     * )
     *
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function updateAction(Request $request, $id)
    {
        $aventure = $this->get('doctrine.orm.default_entity_manager')->getRepository('AppBundle:Aventure')->find($id);
        if($aventure === null){
            return new Response();
        }
        $datas = json_decode($request->getContent(), true);
        GenericHydrator::hydrate($aventure, $datas);
        $this->get('doctrine.orm.default_entity_manager')->flush();

        return new JsonResponse($aventure);
    }
} 