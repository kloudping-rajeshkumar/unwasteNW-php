$data = &#91; 
		'payment_id' => $_POST&#91;'razorpay_payment_id'],
		'amount' => $_POST&#91;'totalAmount'],
		'product_id' => $_POST&#91;'product_id'],
	];
 
//check payment is authrized or not via API call
		
		$razorPayId = $_POST&#91;'razorpay_payment_id'];
		
        $ch = curl_init('https://api.razorpay.com/v1/payments/'.$razorPayId.'');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		curl_setopt($ch, CURLOPT_USERPWD, "rzp_***********Jt:WD8l*********Sd"); // Input your Razorpay Key Id and Secret Id here
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = json_decode(curl_exec($ch));
		
		$response->status; // authorized
 
// you can write your database insert code here
 
// check that payment is authorized by razorpay or not
if($response->status == 'authorized')
{
$respval = array('msg' => 'Payment successfully credited', 'status' => true, 'productCode' => $_POST&#91;'product_id'], 'paymentID' => $_POST&#91;'razorpay_payment_id'], 'userEmail' => $_POST&#91;'useremail']);  
 
echo json_encode($respval);
}