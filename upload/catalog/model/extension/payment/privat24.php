<?php

class ModelExtensionPaymentPrivat24 extends Model
{
    public function getMethod($address, $total)
    {
        $this->load->language('extension/payment/privat24');

        $method_data = array(
            'code' => 'privat24',
            'title' => $this->language->get('text_title'),
            'terms' => $this->language->get('text_terms'),
            'sort_order' => $this->config->get('payment_privat24_sort_order')
        );

        return $method_data;
    }
}
