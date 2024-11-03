@extends('Frontend.layout.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.min.js"></script>

    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span>Contact</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->
    <section class="wpo-contact-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-10 offset-lg-1">
                    <div class="office-info">
                        <!-- Your existing code -->
                    </div>
                    <div class="wpo-contact-title">
                        <h2>Have Any Question?</h2>
                        <p>It is a long established fact that a reader will be distracted
                            content of a page when looking.</p>
                    </div>
                    <div class="wpo-contact-form-area">
                        <form method="post" action="{{ route('contacts.store') }}" id="contactForm">
                            @csrf
                            <div>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Your Name*" required>
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email*" required>
                            </div>
                            <div>
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Address">
                            </div>
                            <div>
                                <select name="service" class="form-control" required>
                                    <option disabled="disabled" selected="">Services</option>
                                    <option>Fiber Laser Cutting Machine</option>
                                    <option>Combination Sheet & Tube Laser Cutting Machine</option>
                                    <option>Laser Welding Equipment</option>
                                    <option>Laser Welding Equipment</option>
                                    <option>Metal Bending Equipment</option>
                                    <option>Pipe Bending Equipment</option>
                                    <option>Laser Cleaning Equipment</option>
                                </select>
                            </div>
                            <div class="fullwidth">
                                <textarea class="form-control" name="note" id="note" placeholder="Message..."></textarea>
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn">Submit</button>
                            </div>
                        </form>
    
                        <div id="successMessage" style="display:none;">
                            <h2>Thank you for your submission. A confirmation email has been sent to you.</h2>
                            <canvas id="confettiCanvas"></canvas>
                        </div>
    
                        @if (session('success'))
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    showSuccessMessage();
                                });
                            </script>
                        @endif
    
                        @if ($errors->any())
                            <div id="error">Error occurred while sending email. Please try again later.</div>
                        @endif
    
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    
    <script>
        function showSuccessMessage() {
            const successMessage = document.getElementById('successMessage');
            successMessage.style.display = 'block';
    
            // Start the confetti effect
            const duration = 5 * 1000;
            const end = Date.now() + duration;
    
            (function frame() {
                confetti({
                    particleCount: 3,
                    angle: 60,
                    spread: 55,
                    origin: { x: 0 }
                });
                confetti({
                    particleCount: 3,
                    angle: 120,
                    spread: 55,
                    origin: { x: 1 }
                });
    
                if (Date.now() < end) {
                    requestAnimationFrame(frame);
                }
            }());
        }
    </script>


    <!--  start wpo-contact-map -->
    <section class="wpo-contact-map-section">
        <h2 class="hidden">Contact map</h2>
        <div class="wpo-contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42583.78566031779!2d11.604103604520834!3d48.15870219488891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479e7524c69e5b5f%3A0x51d25a40939a8a0!2sMunich-Bogenhausen%2C%20Germany!5e0!3m2!1sen!2sbd!4v1716376824682!5m2!1sen!2sbd"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            {{-- <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7301.6080817772845!2d90.36790784069451!3d23.78999143181612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0b58914ed45%3A0xb88612d8fbfb11a9!2sWest%20Shewrapara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1711454912966!5m2!1sen!2sbd"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        </div>
    </section>
    

@endsection
