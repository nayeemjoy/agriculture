@extends('layouts.site')
@section('content')
        <div class="card">
            <div>
               <div class="card-image">
              <img src="{{asset('site/crop_pic.jpg')}}" height="400px;">
              <span class="card-title">লবণসহিষ্ঞু ধানের নতুন জাত</span>
            </div>
            </div>
            <div class="card-content">
              <p>বাংলাদেশ পরমাণু কৃষি গবেষণা ইনস্টিটিউটের বিজ্ঞানীরা দেশের উপকূলীয় লবণাক্ত এলাকায় চাষাবাদের জন্য ধানের দু’টি নতুন জাত উদ্ভাবন করেছেন। জাত দু’টি দেশের খাদ্যনিরাপত্তা অর্জনে গুরুত্বপূর্ণ ভূমিকা রাখবে বলে আশা করা হচ্ছে। ধানের নতুন জাত উদ্ভাবনের প্রধান গবেষক ও বিনা’র প্রধান বৈজ্ঞানিক কর্মকর্তা ড. মির্জা মোফাজ্জল ইসলাম জানান, উদ্ভাবিত জাত দু’টি বোরো মৌসুমে চাষ উপযোগী লবণসহিষ্ঞু ধানের জাত। বিগত দিনে উদ্ভাবিত আমন মৌসুমের জন্য ব্রিধান৪০ ও ব্রিধান৪১ এবং বোরো মৌসুমের জন্য ব্রিধান৪৭-এর লবণসহিষ্ঞুতা অনেক কম। কারণ জমিতে লবণের পরিমাণ বেড়ে গেলে ব্রিধান ৪০, ৪১ ও ৪৭ জাতগুলোর ফলন ব্যাপক মাত্রায় কমে যায়। কিন্তু বিনা উদ্ভাবিত জাত দু’টি অপেক্ষাকৃত বেশি মাত্রার লবণাক্ততা সহ্য করতে পারে এবং ফলনও আশানুরূপ। ৮ন্ধ১০ ডেসি সিমেন/মিটার লবণাক্ত জমিতে হেক্টরপ্রতি ফলন সাড়ে চার থেকে পাঁচ টন এবং স্বাভাবিক জমিতে সাড়ে ছয় থেকে সাত টন পর্যন্ত ফলন পাওয়া যায়। জাত দু’টি আলোক অসংবেদনশীল হওয়ায় বোরো ও আমন উভয় মৌসুমে চাষের উপযোগী। বোরো মৌসুমে ১৩০-১৩৫ দিনে এবং আমন মৌসুমে ১২০-১২৫ দিনে পাকে। জাত দু’টিতে রোগবালাই ও পোকামাকড়ের আক্রমণ অনেক কম হয়। জাত দু’টির পাতার রঙ গাঢ় সবুজ, কাণ্ড, পাতা ও শীষ খুব শক্ত। ঝড়ো বাতাসেও ঢলে পড়ে না। পরিপক্ব অবস্খায় ধানের শীষ ঝরে পড়ে না, পাকা ধানের রঙ স্বাভাবিক সোনালি রঙের।</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
       </div>
@stop
@section('script')
<script type="text/javascript">
  $(document).ready(function(){
      // $('.cart').hide();
      $(".button-collapse").sideNav();
      $('.modal-trigger').leanModal();
      $('.collapsible').collapsible({
        accordion : false 
      });
      $('select').material_select();  
      
  });

</script>
@stop