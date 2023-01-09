<?php

class Mankementen extends Controller
{

    private $mankementModel;


    public function __construct()
    {
        $this->mankementModel = $this->model('Mankement');
    }

    public function index()
    {
        $result = $this->mankementModel->getMankement();
        // if ($result) {
        //     $instrecteurNaam = $result[0]->INNA;
        // } else {
        //     $instrecteurNaam = '';
        // }
        // var_dump($result);
        $rows = '';
        foreach ($result as $info) {
            $rows .= "
            <tr>
            <td>$info->Datum</td>
            <td>$info->Mankement</td>
            <td><a href='" . URLROOT . "/mankementen/addMankement/{$info->id}'><img src='" . URLROOT . "/img/b_report.png' alt='topic'></a></td>
            </tr>";
            // var_dump($info);
        }

        // var_dump($result);

        $data = [
            'title' => "Mankement toevoegen",
            'rows' => $rows
        ];
        $this->view('mankement/index', $data);
    }


    public function addMankement($AutoId = NULL)
    {
        $data = [
            'title' => 'Invoegen Mankement',
            'MankementId' => $MankementId,
            'kmstandErrors' => ''
        ];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // var_dump($_POST);
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $data = [
                'title' => 'Invoegen Kilometerstand',
                'AutoId' => $_POST['AutoId'],
                'kmstandErrors' => '',
            ];

            if (empty($data['kmstandErrors'])) {
                $result = $this->wagenparkModel->addKmstand($_POST);
                if ($result) {
                    echo "<p>De nieuwe kilometerstand is toegevoegd</p>";
                } else {
                    echo "<p>De nieuwe kilometerstand is niet toegevoegd, probeer het opnieuw</p>";
                }
                header('Refresh:5; url=' . URLROOT . '/mankement/index/');
            } else {
                header('refresh:3; url=' . URLROOT . '/mankement/addMankement/' . $data['AutoId']);
            }
        }
        $this->view('wagenpark/addKmstand', $data);
    }
}
