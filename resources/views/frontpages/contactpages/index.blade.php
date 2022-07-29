@extends('frontpages.layouts.master')
@section('content')
    <!-- Header-->
    {{-- <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <h1 class="masthead-heading mb-0">Contact Me</h1>
                <h2 class="masthead-subheading mb-0">Just send me a message.</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                    class="bi bi-arrow-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                </svg>
            </div>
        </div>
    </header> --}}
    <!-- Content section 1-->
    <section id="scroll " class="container-t">
        <!-- Wrapper container -->
        <div class="container  py-4 text-white">
            @include('includes.flash-message')
            <!-- Bootstrap 5 starter form -->
            <form id="contactForm" method="POST">
                @csrf
                <!-- Name input -->
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" id="name" name="name" type="text" value=" {{ old('name') }} " />
                    @error('name')
                        {{-- The $attributeValue filed is/must be $validationRule --}}
                        <p class="pt-2 text-danger"> {{ $message }}</p>
                    @enderror
                </div>

                <!-- Email address input -->
                <div class="mb-3">
                    <label class="form-label" for="email">Email </label>
                    <input class="form-control" id="email" name="email" type="email"
                        value=" {{ old('email') }} " />
                    @error('email')
                        {{-- The $attributeValue filed is/must be $validationRule --}}
                        <p class="pt-2 text-danger"> {{ $message }}</p>
                    @enderror
                </div>

                <!-- Subject input -->
                <div class="mb-3">
                    <label class="form-label" for="subject">Subject</label>
                    <input class="form-control" id="subject" name="subject" type="subject"
                        value=" {{ old('subject') }} " />
                    @error('subject')
                        {{-- The $attributeValue filed is/must be $validationRule --}}
                        <p class="pt-2 text-danger"> {{ $message }}</p>
                    @enderror
                </div>


                <!-- Message input -->
                <div class="mb-3">
                    <label class="form-label" for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" type="text" value=" {{ old('message') }} "
                        style="height: 10rem;"></textarea>
                    @error('message')
                        {{-- The $attributeValue filed is/must be $validationRule --}}
                        <p class="pt-2 text-danger"> {{ $message }}</p>
                    @enderror
                </div>
                <!-- Form submit button -->
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg " id="sbmitButton" type="submit">Submit</button>
                </div>
            </form>
            <!--Grid column-->
            <div class="row py-5">
                <div class="text-center">
                    <i class="fas fa-map-marker-alt fa-2x mb-2"></i>
                    <p>Bandung, Jawa Barat, Indonesia</p>
                </div>
                <div class="  text-center">
                    <i class="fas fa-phone mt-4 fa-2x mb-2"></i>
                    <p>+ 6285-1586-66069</p>
                </div>
                <div class=" text-center">
                    <i class="fas fa-envelope mt-4 fa-2x mb-2"></i>
                    <p>farhan.fahrezi1026@gmail.com</p>
                </div>
                </ul>
            </div>
        </div>
    </section>
@endsection
