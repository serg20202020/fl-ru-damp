<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/tservices/tservices_order_history.php');

/**
 * Class TServiceOrderHistory
 *
 * ������ - ���� ���������� �� ������� ��������� ������
 */
class TServiceOrderHistory extends CWidget 
{
    protected $order_id;

    public function run() 
    {
        $history = new tservices_order_history($this->order_id);
        $order_history = $history->getHistory();
            
            
        //�������� ������
        $this->render('t-service-order-history', array(
            'history' => $order_history
        ));
	}
    
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }
}