<?php
class FeedForm extends sfForm
{
  public function setup()
  {
     $this->setWidgets(array(
      'content' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'content' => new sfValidatorString(),
    ));


    $this->widgetSchema->setLabels(array('content' => 'Feed'));

    $this->widgetSchema->setNameFormat('feed[%s]');
  }
}