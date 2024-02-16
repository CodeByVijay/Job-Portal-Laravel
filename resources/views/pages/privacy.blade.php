@extends('partials.app')
@section('title', 'Home')
@section('content')
@push('style')
<style>
    .lableUl li{
        list-style: circle;
    }
    .noLableUl li{
        list-style: disc;
    }
</style>

@endpush

<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('frontend/assets/img/hero/about.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Privacy Policy</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

   <div class="container pt-50 pb-50">
    <h1>Privacy Policy</h1>
    <p>Effective Date: 01 Feb 2024</p>

    <h2>Welcome!</h2>
    <p>This Privacy Policy describes how Job Finder Portal ("we", "us", or "our") collects, uses, and discloses your
        personal information when you use our website, mobile app, or other online services (collectively, the "Services").
    </p>

    <h2>Information We Collect</h2>
    <p>We collect the following types of information from you:</p>
    <ul class="lableUl">
        <li><strong>Personal Information:</strong> This includes information that can be used to identify you, such as your
            name, email address, phone number, resume, work history, education, and skills.</li>
        <li><strong>Usage Information:</strong> This includes information about how you use the Services, such as the pages
            you visit, the jobs you search for, and the applications you submit.</li>
        <li><strong>Device Information:</strong> This includes information about the device you use to access the Services,
            such as your IP address, device type, and operating system.</li>
        <li><strong>Cookie Information:</strong> We use cookies and similar technologies to collect information about your
            browsing activity on the Services.</li>
    </ul>

    <h2>How We Use Your Information</h2>
    <p>We use your information for the following purposes:</p>
    <ul class="noLableUl">
        <li>To provide you with the Services, including matching you with relevant jobs and connecting you with employers.
        </li>
        <li>To improve the Services and personalize your experience.</li>
        <li>To send you job alerts and other marketing communications (with your consent).</li>
        <li>To analyze how you use the Services and to generate reports.</li>
        <li>To comply with legal requirements and protect our rights and interests.</li>
    </ul>

    <h2>How We Share Your Information</h2>
    <p>We may share your information with the following third parties:</p>
    <ul class="lableUl">
        <li><strong>Employers:</strong> We may share your information with employers when you apply for a job through the
            Services.</li>
        <li><strong>Service Providers:</strong> We may share your information with service providers who help us operate the
            Services, such as data storage providers and marketing companies.</li>
        <li><strong>Law Enforcement:</strong> We may share your information with law enforcement if we are required to do so
            by law.</li>
    </ul>

    <h2>Your Choices</h2>
    <p>You have the following choices regarding your information:</p>
    <ul class="noLableUl">
        <li>You can access, update, or delete your information through your account settings.</li>
        <li>You can unsubscribe from marketing communications by clicking on the "unsubscribe" link in any email we send
            you.</li>
        <li>You can control cookies through your browser settings.</li>
    </ul>

    <h2>Data Security</h2>
    <p>We take the security of your information seriously and use reasonable measures to protect it from unauthorized
        access, disclosure, alteration, or destruction. However, no website or internet transmission is completely secure,
        so we cannot guarantee the security of your information.</p>

    <h2>Changes to this Privacy Policy</h2>
    <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy
        Policy on the Services.</p>

    <h2>Contact Us</h2>
    <p>If you have any questions about this Privacy Policy, please contact us at <a style="color: purple;" href="mailto:jobs@devvijay.in">jobs@devvijay.in</a>.</p>
   </div>

@endsection
