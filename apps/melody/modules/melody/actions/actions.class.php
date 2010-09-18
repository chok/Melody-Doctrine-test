<?php

/**
 * melody actions.
 *
 * @package    melody-doctrine
 * @subpackage melody
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class melodyActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

  }

  public function executeConnect(sfWebRequest $request)
  {
    $this->getUser()->connect('facebook');
  }

  public function executeFacebook(sfWebRequest $request)
  {
    $fb_melody = $this->getUser()->getMelody('facebook');

    $this->me = $fb_melody->getMe(null, array('fields' => 'picture', 'size' => 'large'));
    $this->friends = $fb_melody->getFriends();

    $this->form = new FeedForm();
  }

  public function executeFacebookFeed(sfWebRequest $request)
  {
    if($request->isMethod('post'))
    {
      $form = new FeedForm();
      $form->bind($request->getParameter('feed'));
      if($form->isValid())
      {
        $this->getUser()->getMelody('facebook')->getMeFeed(null, array('message' => $form->getValue('content')), 'POST');
      }
    }

    $this->redirect('@melody_facebook');
  }
}
