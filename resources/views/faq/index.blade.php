@extends('layout.main')

@section('content')

    <div class="container">
        <h1 align="center"><span id="bigsign">N. Marcell's FAQ Page!</span></h1>

        <h1 align="left" id="basestyle"><b>1. How do you print on your laptop?</b></h1>
        <h2 id="longfont">
            <ul id="smoltext">
                <li>1. Open <a href="https://hz.mynetpay.nl/" target="_blank">this</a> website and then
                    click on <i>Upload files now</i>. Then, use your HZ card at the printer to print the
                    doc.
                </li>
                <li>2. Log in with your HZ user and password</li>
                <li>3. Tap <i>Web Print</i></li>
                <li>4. At <i>Step 1 select a printer</i>, check the settings (format, single/double sided,
                    etc.)
                </li>
                <li>5. Click in the field <i>Step 2: Select files to choose your files</i></li>
                <li>6. Click on <i>Upload files now</i>. Then, use your HZ card at the printer to print the
                    doc.
                </li>
            </ul>
        </h2>
        <h2 id="longfont">
            <img src="pictures/gwb.jpg" style="width:25%; float:right; margin-right: 10%" alt="">
        </h2>
    </div>

    <div>
        <h1 align="left" id="basestyle"><b>2. How do you scan a document?</b></h1>
        <h2 id="longfont">
            <ul id="smoltext">
                <li>1. Log onto your printer using your HZ card by entering your HZ user and password.</li>
                <li>2. Choose the <i>Scan</i> option in the menu.</li>
                <li>3. Place the document on the glass plate.</li>
                <li>4. Press <i>Start</i>.</li>
                <li>5. After scanning, press the symbol in the top right corner to log off.</li>
            </ul>
        </h2>
    </div>

    <div>
        <h1 align="left" id="basestyle"><b>3. How do you buy something on the web shop?</b></h1>
        <h2 id="longfont">
            <ul id="smoltext">
                <li>1. Go to the <a href="https://webshop.hz.nl/" target="_blank">web shop's page</a></li>
                <li>2. Put the desired item in the cart (Click the "order" button)</li>
                <li>3. Go to the checkout and pay for the item.</li>
            </ul>
        </h2>
        <h2 id="longfont">
            <img src="pictures/inside.jpeg" style="width:25%; float:right; margin-right: 10%" alt="">
        </h2>
    </div>

    <div>
        <h1 align="left" id="basestyle"><b>4. How do you book a project space?</b></h1>
        <h2 id="longfont">
            <ul id="smoltext">
                <li>1. Go to <a
                        href="https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner"
                        target="_blank">this</a> website.
                </li>
                <li>2. Book a room.</li>
            </ul>
        </h2>
    </div>

    <div>
        <h1 align="left" id="basestyle"><b>5. What are the instructions if you want to park your car at the
                HZ parking lot?</b></h1>
        <h2 id="longfont">
            <ul id="smoltext">
                <li>1. It is possible at Kousteensedijk, but you have to request cards at the JRCZ service
                    desk.
                </li>
            </ul>
        </h2>
    </div>


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('faq.create') }}" class="btn btn-primary mb-3" id='faq-actions'>Create New FAQ</a>

    @foreach ($faqs as $faq)
        <div>
            <h2 class='faq-question'>{{ $faq->question }}</h2>
            <br>
            <p class='faq-answer'>{{ $faq->answer }}</p>
            <br>

            <a href="{{ route('faq.edit', $faq->id) }}" class="btn btn-warning btn-sm"
               id='faq-actions'>Edit</a>

            <form action="{{ route('faq.destroy', $faq->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" id='faq-actions'>Delete</button>
            </form>
        </div>
    @endforeach
@endsection
