<?php

class DashboardController extends Controller
{

    /* A public variable that is part of the `DashboardController` class. */
    public $pageTitle = "This is the page title.";

	
    /**
     * The function `actionIndex()` is a public function that renders the view.
     */
    public function actionIndex()
	{
		$this->render("view");
	}

	/**
     * The function `actionHome()` is a public function that is part of the `DashboardController` class
     */
    public function actionHome()
	{
        $this->layout = "basic";
        $emails = ['test@gmail.com','johndoe@gmail.com'];
        $this->render('view',['emails'=>$emails]);
		// echo "This is the DashboardController Home. " . $this->pageTitle . " " . $this->message("Yes or No");
	}

    /**
     * It returns the value of the argument passed to it.
     * 
     * @param msg The message to be displayed.
     * 
     * @return The message function is returning the value of the  variable.
     */
    public function message($msg = null)
    {
        return $msg;
    }

	/**
     * The `actionFeatures()` function is a public function that is called when the `features` action is
     * requested
     */
    public function actionFeatures()
	{
		echo "This is the DashboardController feature.";
	}


    public function actionEvents($var = null)
    {
        $this->pageTitle == "Events";
        $this->layout = "basic";
        $events = Event::model()->findAll();
        $this->render("events", ["events" => $events]);

        $model = Event::model()->findByAttributes(['event_time' => "08:30 PM"]);
        $this->render("events", ["model" => $model]);

        // $events = Event::model()->findAllByAttributes(['event_time' => "08:30 PM"]);
        // $this->render("events", ["events" => $events]);

        // $event = Event::model()->findByPk(1);
        // $this->render("events",['model' => $event]);
    }

}