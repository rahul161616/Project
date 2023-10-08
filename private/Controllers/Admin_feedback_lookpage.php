<?php
class Admin_feedback_lookpage extends Controller
{
    public function index()
    {
        $data = $this->getFeedback();

        $this->view('Admin_feedback_lookpage', $data);
    }
    public function getFeedback()
    {
        $feedbackmodel = new Feedback_Model();
        $data = $feedbackmodel->findAll();
        return $data;
    }
}
