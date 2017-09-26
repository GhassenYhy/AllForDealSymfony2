<?php

namespace mainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use mainBundle\Entity\Achat;
use mainBundle\Form\AchatType;

/**
 * Achat controller.
 *
 * @Route("/achat")
 */
class AchatController extends Controller
{

    /**
     * Lists all Achat entities.
     *
     * @Route("/", name="achat")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('mainBundle:Achat')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Achat entity.
     *
     * @Route("/", name="achat_create")
     * @Method("POST")
     * @Template("mainBundle:Achat:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Achat();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('achat_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Achat entity.
     *
     * @param Achat $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Achat $entity)
    {
        $form = $this->createForm(new AchatType(), $entity, array(
            'action' => $this->generateUrl('achat_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Achat entity.
     *
     * @Route("/new", name="achat_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Achat();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Achat entity.
     *
     * @Route("/{id}", name="achat_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mainBundle:Achat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Achat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Achat entity.
     *
     * @Route("/{id}/edit", name="achat_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mainBundle:Achat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Achat entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Achat entity.
    *
    * @param Achat $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Achat $entity)
    {
        $form = $this->createForm(new AchatType(), $entity, array(
            'action' => $this->generateUrl('achat_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Achat entity.
     *
     * @Route("/{id}", name="achat_update")
     * @Method("PUT")
     * @Template("mainBundle:Achat:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mainBundle:Achat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Achat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('achat_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Achat entity.
     *
     * @Route("/{id}", name="achat_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('mainBundle:Achat')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Achat entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('achat'));
    }

    /**
     * Creates a form to delete a Achat entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('achat_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
