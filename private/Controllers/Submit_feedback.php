<?php
error_reporting(E_ALL);
class Submit_feedback extends Controller
{
    public function index()
    {
        $feedbackModel = new Feedback_Model(); // Replace with your actual model
        // session_destroy();
        // Check if the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // var_dump($_POST); // Debugging line
            // Validate and sanitize form inputs
            $email = $this->input_filter($_POST['email']);
            $feedback = $this->input_filter($_POST['feedback']);

            // Insert feedback into the database
            // 
            $data = [
                'email' => $email,
                'feedback' => $feedback,
            ];
            $query2 = "INSERT INTO feedback_table (email, feedback) VALUES (:email, :feedback)";

            $result = $feedbackModel->write($query2, $data);

            show($result);
            // die;
            if ($result) {
                // Feedback submitted successfully
                // redirect(ROOT . '/Home');
                header("Location: " . ROOT . '/Home');
            } else {
                // Feedback submission failed, log the error

                // Redirect to an error page or display an error message
                // redirect(ROOT . '/Page');
                echo "Error: Failed to submit feedback. Please try again lhgfgfgater.";
            }
        }
    }

    private function input_filter($data)
    {
        // Implement your input filtering logic here (e.g., trim, validate email, sanitize)
        $data = esc($data);
        return $data;
    }
}
