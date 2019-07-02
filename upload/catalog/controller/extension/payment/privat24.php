<?php

class ControllerExtensionPaymentPrivat24 extends Controller
{
    public function index()
    {
        return $this->load->view('extension/payment/privat24');
    }

    public function confirm()
    {
        $json = array();

        if ($this->session->data['payment_method']['code'] == 'privat24') {
            $this->load->model('checkout/order');

            $this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_privat24_order_status_id'));

            $json['redirect'] = $this->url->link('checkout/success');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
