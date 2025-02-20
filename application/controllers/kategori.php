<?php

class Kategori extends CI_Controller
{
    public function news()
    {
        $data['news'] = $this->model_kategori->news()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/news', $data);
        $this->load->view('templates/footer');
    }

    public function hot()
    {
        $data['hot'] = $this->model_kategori->hot()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/hot', $data);
        $this->load->view('templates/footer');
    }

    public function health()
    {
        $data['health'] = $this->model_kategori->health()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/health', $data);
        $this->load->view('templates/footer');
    }

    public function inet()
    {
        $data['inet'] = $this->model_kategori->inet()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/inet', $data);
        $this->load->view('templates/footer');
    }


    public function food()
    {
        $data['food'] = $this->model_kategori->food()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/food', $data);
        $this->load->view('templates/footer');
    }

    public function oto()
    {
        $data['oto'] = $this->model_kategori->oto()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/oto', $data);
        $this->load->view('templates/footer');
    }
    public function sport()
    {
        $data['sport'] = $this->model_kategori->sport()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/sport', $data);
        $this->load->view('templates/footer');
    }
}
