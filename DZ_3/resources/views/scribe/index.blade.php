<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-employees" class="tocify-header">
                <li class="tocify-item level-1" data-unique="employees">
                    <a href="#employees">Employees</a>
                </li>
                                    <ul id="tocify-subheader-employees" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="employees-GETapi-employees">
                                <a href="#employees-GETapi-employees">Dohvati sve zaposlenike

Vraća paginirani popis zaposlenika (10 po stranici).</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="employees-POSTapi-employees">
                                <a href="#employees-POSTapi-employees">Dodaj novog zaposlenika

Dodaje novog zaposlenika u bazu.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="employees-GETapi-employees--EmployeeID-">
                                <a href="#employees-GETapi-employees--EmployeeID-">Dohvati jednog zaposlenika

Dohvaća podatke o zaposleniku prema ID-u.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="employees-PUTapi-employees--EmployeeID-">
                                <a href="#employees-PUTapi-employees--EmployeeID-">Ažuriraj zaposlenika

Ažurira podatke zaposlenika po ID-u.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="employees-DELETEapi-employees--EmployeeID-">
                                <a href="#employees-DELETEapi-employees--EmployeeID-">Obriši zaposlenika

Briše zaposlenika po ID-u.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-locations" class="tocify-header">
                <li class="tocify-item level-1" data-unique="locations">
                    <a href="#locations">Locations</a>
                </li>
                                    <ul id="tocify-subheader-locations" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="locations-GETapi-locations">
                                <a href="#locations-GETapi-locations">Dohvati sve lokacije

Vraća paginirani popis lokacija (10 po stranici).</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="locations-POSTapi-locations">
                                <a href="#locations-POSTapi-locations">Dodaj novu lokaciju

Stvara novu lokaciju s danim podacima.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="locations-GETapi-locations--LocationID-">
                                <a href="#locations-GETapi-locations--LocationID-">Dohvati jednu lokaciju

Vraća podatke o pojedinoj lokaciji po ID-u.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="locations-PUTapi-locations--LocationID-">
                                <a href="#locations-PUTapi-locations--LocationID-">Ažuriraj lokaciju

Ažurira postojeću lokaciju po ID-u.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="locations-DELETEapi-locations--LocationID-">
                                <a href="#locations-DELETEapi-locations--LocationID-">Obriši lokaciju

Briše lokaciju po ID-u.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-product-photos" class="tocify-header">
                <li class="tocify-item level-1" data-unique="product-photos">
                    <a href="#product-photos">Product Photos</a>
                </li>
                                    <ul id="tocify-subheader-product-photos" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="product-photos-GETapi-productphoto">
                                <a href="#product-photos-GETapi-productphoto">Dohvati sve fotografije proizvoda

Vraća paginirani popis fotografija proizvoda (10 po stranici).</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="product-photos-POSTapi-productphoto">
                                <a href="#product-photos-POSTapi-productphoto">Dodaj novu fotografiju proizvoda

Kreira novu fotografiju s podacima o URL-u i opisu.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="product-photos-GETapi-productphoto--id-">
                                <a href="#product-photos-GETapi-productphoto--id-">Dohvati jednu fotografiju proizvoda

Dohvaća jednu fotografiju po ID-u.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="product-photos-PUTapi-productphoto--id-">
                                <a href="#product-photos-PUTapi-productphoto--id-">Ažuriraj fotografiju proizvoda

Ažurira postojeću fotografiju.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="product-photos-DELETEapi-productphoto--id-">
                                <a href="#product-photos-DELETEapi-productphoto--id-">Obriši fotografiju proizvoda

Briše fotografiju po ID-u.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="product-photos-GETapi-productphoto-image--id-">
                                <a href="#product-photos-GETapi-productphoto-image--id-">Prikaži stvarnu sliku

Vraća binarni sadržaj slike iz `storage/app/public/...`.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="product-photos-GETapi-productphoto-prikazi--id-">
                                <a href="#product-photos-GETapi-productphoto-prikazi--id-">Dohvati info o slici (prikazi)

Vraća samo `url` i `description` za sliku.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-products" class="tocify-header">
                <li class="tocify-item level-1" data-unique="products">
                    <a href="#products">Products</a>
                </li>
                                    <ul id="tocify-subheader-products" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="products-GETapi-products">
                                <a href="#products-GETapi-products">Dohvati sve proizvode

Vraća paginirani popis proizvoda (10 po stranici).</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-POSTapi-products">
                                <a href="#products-POSTapi-products">Dodaj novi proizvod

Stvara novi proizvod s danim podacima.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-GETapi-products--ProductID-">
                                <a href="#products-GETapi-products--ProductID-">Dohvati jedan proizvod

Dohvaća podatke o proizvodu prema ID-u.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-PUTapi-products--ProductID-">
                                <a href="#products-PUTapi-products--ProductID-">Ažuriraj proizvod

Ažurira podatke proizvoda po ID-u.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-DELETEapi-products--ProductID-">
                                <a href="#products-DELETEapi-products--ProductID-">Obriši proizvod

Briše proizvod po ID-u.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: May 25, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="employees">Employees</h1>

    

                                <h2 id="employees-GETapi-employees">Dohvati sve zaposlenike

Vraća paginirani popis zaposlenika (10 po stranici).</h2>

<p>
</p>



<span id="example-requests-GETapi-employees">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/employees" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/employees"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-employees">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;current_page&quot;: 1,
  &quot;data&quot;: [
    {
      &quot;id&quot;: 1,
      &quot;NationalIDNumber&quot;: &quot;123456789&quot;,
      &quot;Title&quot;: &quot;Manager&quot;,
      &quot;BirthDate&quot;: &quot;1980-01-01&quot;,
      ...
    }
  ],
  &quot;total&quot;: 50,
  ...
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-employees" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-employees"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-employees"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-employees" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-employees">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-employees" data-method="GET"
      data-path="api/employees"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-employees', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-employees"
                    onclick="tryItOut('GETapi-employees');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-employees"
                    onclick="cancelTryOut('GETapi-employees');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-employees"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/employees</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-employees"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-employees"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="employees-POSTapi-employees">Dodaj novog zaposlenika

Dodaje novog zaposlenika u bazu.</h2>

<p>
</p>



<span id="example-requests-POSTapi-employees">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/employees" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"NationalIDNumber\": \"123456789\",
    \"ContactID\": 5,
    \"LoginID\": \"jdoe\",
    \"ManagerID\": 2,
    \"Title\": \"Senior Engineer\",
    \"BirthDate\": \"1990-05-10\",
    \"MaritalStatus\": \"S\",
    \"Gender\": \"M\",
    \"HireDate\": \"2022-01-01\",
    \"SalariedFlag\": true,
    \"VacationHours\": 10,
    \"SickLeaveHours\": 5,
    \"CurrentFlag\": true,
    \"rowguid\": \"123e4567-e89b-12d3-a456-426614174000\",
    \"ModifiedDate\": \"2023-04-01\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/employees"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "NationalIDNumber": "123456789",
    "ContactID": 5,
    "LoginID": "jdoe",
    "ManagerID": 2,
    "Title": "Senior Engineer",
    "BirthDate": "1990-05-10",
    "MaritalStatus": "S",
    "Gender": "M",
    "HireDate": "2022-01-01",
    "SalariedFlag": true,
    "VacationHours": 10,
    "SickLeaveHours": 5,
    "CurrentFlag": true,
    "rowguid": "123e4567-e89b-12d3-a456-426614174000",
    "ModifiedDate": "2023-04-01"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-employees">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;id&quot;: 51,
  &quot;NationalIDNumber&quot;: &quot;123456789&quot;,
  &quot;Title&quot;: &quot;Manager&quot;,
  ...
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-employees" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-employees"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-employees"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-employees" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-employees">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-employees" data-method="POST"
      data-path="api/employees"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-employees', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-employees"
                    onclick="tryItOut('POSTapi-employees');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-employees"
                    onclick="cancelTryOut('POSTapi-employees');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-employees"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/employees</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-employees"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-employees"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>NationalIDNumber</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="NationalIDNumber"                data-endpoint="POSTapi-employees"
               value="123456789"
               data-component="body">
    <br>
<p>Nacionalni ID. Example: <code>123456789</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ContactID</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ContactID"                data-endpoint="POSTapi-employees"
               value="5"
               data-component="body">
    <br>
<p>ID kontakta. Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>LoginID</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="LoginID"                data-endpoint="POSTapi-employees"
               value="jdoe"
               data-component="body">
    <br>
<p>Prijava korisnika. Example: <code>jdoe</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ManagerID</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ManagerID"                data-endpoint="POSTapi-employees"
               value="2"
               data-component="body">
    <br>
<p>ID nadređenog. Example: <code>2</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Title"                data-endpoint="POSTapi-employees"
               value="Senior Engineer"
               data-component="body">
    <br>
<p>Pozicija. Example: <code>Senior Engineer</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>BirthDate</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="BirthDate"                data-endpoint="POSTapi-employees"
               value="1990-05-10"
               data-component="body">
    <br>
<p>Datum rođenja. Example: <code>1990-05-10</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>MaritalStatus</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="MaritalStatus"                data-endpoint="POSTapi-employees"
               value="S"
               data-component="body">
    <br>
<p>Bračni status. Example: <code>S</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Gender"                data-endpoint="POSTapi-employees"
               value="M"
               data-component="body">
    <br>
<p>Spol. Example: <code>M</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>HireDate</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="HireDate"                data-endpoint="POSTapi-employees"
               value="2022-01-01"
               data-component="body">
    <br>
<p>Datum zaposlenja. Example: <code>2022-01-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>SalariedFlag</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-employees" style="display: none">
            <input type="radio" name="SalariedFlag"
                   value="true"
                   data-endpoint="POSTapi-employees"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-employees" style="display: none">
            <input type="radio" name="SalariedFlag"
                   value="false"
                   data-endpoint="POSTapi-employees"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Zaposlen na plaći. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>VacationHours</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="VacationHours"                data-endpoint="POSTapi-employees"
               value="10"
               data-component="body">
    <br>
<p>Sati godišnjeg odmora. Example: <code>10</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>SickLeaveHours</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="SickLeaveHours"                data-endpoint="POSTapi-employees"
               value="5"
               data-component="body">
    <br>
<p>Sati bolovanja. Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>CurrentFlag</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-employees" style="display: none">
            <input type="radio" name="CurrentFlag"
                   value="true"
                   data-endpoint="POSTapi-employees"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-employees" style="display: none">
            <input type="radio" name="CurrentFlag"
                   value="false"
                   data-endpoint="POSTapi-employees"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Trenutno zaposlen. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rowguid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rowguid"                data-endpoint="POSTapi-employees"
               value="123e4567-e89b-12d3-a456-426614174000"
               data-component="body">
    <br>
<p>GUID. Example: <code>123e4567-e89b-12d3-a456-426614174000</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ModifiedDate</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ModifiedDate"                data-endpoint="POSTapi-employees"
               value="2023-04-01"
               data-component="body">
    <br>
<p>Datum izmjene. Example: <code>2023-04-01</code></p>
        </div>
        </form>

                    <h2 id="employees-GETapi-employees--EmployeeID-">Dohvati jednog zaposlenika

Dohvaća podatke o zaposleniku prema ID-u.</h2>

<p>
</p>



<span id="example-requests-GETapi-employees--EmployeeID-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/employees/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/employees/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-employees--EmployeeID-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;id&quot;: 1,
  &quot;NationalIDNumber&quot;: &quot;123456789&quot;,
  &quot;Title&quot;: &quot;Manager&quot;,
  ...
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-employees--EmployeeID-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-employees--EmployeeID-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-employees--EmployeeID-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-employees--EmployeeID-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-employees--EmployeeID-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-employees--EmployeeID-" data-method="GET"
      data-path="api/employees/{EmployeeID}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-employees--EmployeeID-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-employees--EmployeeID-"
                    onclick="tryItOut('GETapi-employees--EmployeeID-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-employees--EmployeeID-"
                    onclick="cancelTryOut('GETapi-employees--EmployeeID-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-employees--EmployeeID-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/employees/{EmployeeID}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-employees--EmployeeID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-employees--EmployeeID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>EmployeeID</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="EmployeeID"                data-endpoint="GETapi-employees--EmployeeID-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>employee</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="employee"                data-endpoint="GETapi-employees--EmployeeID-"
               value="1"
               data-component="url">
    <br>
<p>ID zaposlenika. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="employees-PUTapi-employees--EmployeeID-">Ažuriraj zaposlenika

Ažurira podatke zaposlenika po ID-u.</h2>

<p>
</p>



<span id="example-requests-PUTapi-employees--EmployeeID-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/employees/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"NationalIDNumber\": \"123456789\",
    \"ContactID\": 5,
    \"LoginID\": \"jdoe\",
    \"ManagerID\": 2,
    \"Title\": \"Senior Engineer\",
    \"BirthDate\": \"1990-05-10\",
    \"MaritalStatus\": \"S\",
    \"Gender\": \"M\",
    \"HireDate\": \"2022-01-01\",
    \"SalariedFlag\": true,
    \"VacationHours\": 10,
    \"SickLeaveHours\": 5,
    \"CurrentFlag\": true,
    \"rowguid\": \"123e4567-e89b-12d3-a456-426614174000\",
    \"ModifiedDate\": \"2023-04-01\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/employees/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "NationalIDNumber": "123456789",
    "ContactID": 5,
    "LoginID": "jdoe",
    "ManagerID": 2,
    "Title": "Senior Engineer",
    "BirthDate": "1990-05-10",
    "MaritalStatus": "S",
    "Gender": "M",
    "HireDate": "2022-01-01",
    "SalariedFlag": true,
    "VacationHours": 10,
    "SickLeaveHours": 5,
    "CurrentFlag": true,
    "rowguid": "123e4567-e89b-12d3-a456-426614174000",
    "ModifiedDate": "2023-04-01"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-employees--EmployeeID-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;id&quot;: 1,
  &quot;NationalIDNumber&quot;: &quot;123456789&quot;,
  &quot;Title&quot;: &quot;Manager&quot;,
  ...
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-employees--EmployeeID-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-employees--EmployeeID-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-employees--EmployeeID-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-employees--EmployeeID-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-employees--EmployeeID-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-employees--EmployeeID-" data-method="PUT"
      data-path="api/employees/{EmployeeID}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-employees--EmployeeID-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-employees--EmployeeID-"
                    onclick="tryItOut('PUTapi-employees--EmployeeID-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-employees--EmployeeID-"
                    onclick="cancelTryOut('PUTapi-employees--EmployeeID-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-employees--EmployeeID-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/employees/{EmployeeID}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/employees/{EmployeeID}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>EmployeeID</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="EmployeeID"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>employee</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="employee"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="1"
               data-component="url">
    <br>
<p>ID zaposlenika. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>NationalIDNumber</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="NationalIDNumber"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="123456789"
               data-component="body">
    <br>
<p>Nacionalni ID. Example: <code>123456789</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ContactID</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ContactID"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="5"
               data-component="body">
    <br>
<p>ID kontakta. Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>LoginID</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="LoginID"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="jdoe"
               data-component="body">
    <br>
<p>Prijava korisnika. Example: <code>jdoe</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ManagerID</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ManagerID"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="2"
               data-component="body">
    <br>
<p>ID nadređenog. Example: <code>2</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Title"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="Senior Engineer"
               data-component="body">
    <br>
<p>Pozicija. Example: <code>Senior Engineer</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>BirthDate</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="BirthDate"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="1990-05-10"
               data-component="body">
    <br>
<p>Datum rođenja. Example: <code>1990-05-10</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>MaritalStatus</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="MaritalStatus"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="S"
               data-component="body">
    <br>
<p>Bračni status. Example: <code>S</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Gender"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="M"
               data-component="body">
    <br>
<p>Spol. Example: <code>M</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>HireDate</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="HireDate"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="2022-01-01"
               data-component="body">
    <br>
<p>Datum zaposlenja. Example: <code>2022-01-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>SalariedFlag</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-employees--EmployeeID-" style="display: none">
            <input type="radio" name="SalariedFlag"
                   value="true"
                   data-endpoint="PUTapi-employees--EmployeeID-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-employees--EmployeeID-" style="display: none">
            <input type="radio" name="SalariedFlag"
                   value="false"
                   data-endpoint="PUTapi-employees--EmployeeID-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Zaposlen na plaći. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>VacationHours</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="VacationHours"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="10"
               data-component="body">
    <br>
<p>Sati godišnjeg odmora. Example: <code>10</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>SickLeaveHours</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="SickLeaveHours"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="5"
               data-component="body">
    <br>
<p>Sati bolovanja. Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>CurrentFlag</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-employees--EmployeeID-" style="display: none">
            <input type="radio" name="CurrentFlag"
                   value="true"
                   data-endpoint="PUTapi-employees--EmployeeID-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-employees--EmployeeID-" style="display: none">
            <input type="radio" name="CurrentFlag"
                   value="false"
                   data-endpoint="PUTapi-employees--EmployeeID-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Trenutno zaposlen. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rowguid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rowguid"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="123e4567-e89b-12d3-a456-426614174000"
               data-component="body">
    <br>
<p>GUID. Example: <code>123e4567-e89b-12d3-a456-426614174000</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ModifiedDate</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ModifiedDate"                data-endpoint="PUTapi-employees--EmployeeID-"
               value="2023-04-01"
               data-component="body">
    <br>
<p>Datum izmjene. Example: <code>2023-04-01</code></p>
        </div>
        </form>

                    <h2 id="employees-DELETEapi-employees--EmployeeID-">Obriši zaposlenika

Briše zaposlenika po ID-u.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-employees--EmployeeID-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/employees/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/employees/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-employees--EmployeeID-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Employee deleted successfully.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-employees--EmployeeID-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-employees--EmployeeID-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-employees--EmployeeID-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-employees--EmployeeID-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-employees--EmployeeID-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-employees--EmployeeID-" data-method="DELETE"
      data-path="api/employees/{EmployeeID}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-employees--EmployeeID-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-employees--EmployeeID-"
                    onclick="tryItOut('DELETEapi-employees--EmployeeID-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-employees--EmployeeID-"
                    onclick="cancelTryOut('DELETEapi-employees--EmployeeID-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-employees--EmployeeID-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/employees/{EmployeeID}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-employees--EmployeeID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-employees--EmployeeID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>EmployeeID</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="EmployeeID"                data-endpoint="DELETEapi-employees--EmployeeID-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>employee</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="employee"                data-endpoint="DELETEapi-employees--EmployeeID-"
               value="1"
               data-component="url">
    <br>
<p>ID zaposlenika. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="locations">Locations</h1>

    

                                <h2 id="locations-GETapi-locations">Dohvati sve lokacije

Vraća paginirani popis lokacija (10 po stranici).</h2>

<p>
</p>



<span id="example-requests-GETapi-locations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/locations" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/locations"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-locations">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;current_page&quot;: 1,
  &quot;data&quot;: [
    {
      &quot;id&quot;: 1,
      &quot;Name&quot;: &quot;Warehouse 1&quot;,
      &quot;City&quot;: &quot;Zagreb&quot;,
      ...
    }
  ],
  &quot;total&quot;: 15,
  ...
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-locations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-locations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-locations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-locations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-locations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-locations" data-method="GET"
      data-path="api/locations"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-locations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-locations"
                    onclick="tryItOut('GETapi-locations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-locations"
                    onclick="cancelTryOut('GETapi-locations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-locations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/locations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-locations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-locations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="locations-POSTapi-locations">Dodaj novu lokaciju

Stvara novu lokaciju s danim podacima.</h2>

<p>
</p>



<span id="example-requests-POSTapi-locations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/locations" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"Name\": \"Warehouse 1\",
    \"Address\": \"Industrijska 12\",
    \"City\": \"Zagreb\",
    \"Country\": \"Hrvatska\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/locations"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "Name": "Warehouse 1",
    "Address": "Industrijska 12",
    "City": "Zagreb",
    "Country": "Hrvatska"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-locations">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;id&quot;: 16,
  &quot;Name&quot;: &quot;Warehouse 1&quot;,
  &quot;City&quot;: &quot;Zagreb&quot;,
  ...
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-locations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-locations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-locations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-locations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-locations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-locations" data-method="POST"
      data-path="api/locations"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-locations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-locations"
                    onclick="tryItOut('POSTapi-locations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-locations"
                    onclick="cancelTryOut('POSTapi-locations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-locations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/locations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-locations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-locations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Name"                data-endpoint="POSTapi-locations"
               value="Warehouse 1"
               data-component="body">
    <br>
<p>Naziv lokacije. Example: <code>Warehouse 1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Address"                data-endpoint="POSTapi-locations"
               value="Industrijska 12"
               data-component="body">
    <br>
<p>Adresa. Example: <code>Industrijska 12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>City</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="City"                data-endpoint="POSTapi-locations"
               value="Zagreb"
               data-component="body">
    <br>
<p>Grad. Example: <code>Zagreb</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Country"                data-endpoint="POSTapi-locations"
               value="Hrvatska"
               data-component="body">
    <br>
<p>Država. Example: <code>Hrvatska</code></p>
        </div>
        </form>

                    <h2 id="locations-GETapi-locations--LocationID-">Dohvati jednu lokaciju

Vraća podatke o pojedinoj lokaciji po ID-u.</h2>

<p>
</p>



<span id="example-requests-GETapi-locations--LocationID-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/locations/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/locations/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-locations--LocationID-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;id&quot;: 1,
  &quot;Name&quot;: &quot;Warehouse 1&quot;,
  &quot;City&quot;: &quot;Zagreb&quot;,
  ...
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-locations--LocationID-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-locations--LocationID-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-locations--LocationID-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-locations--LocationID-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-locations--LocationID-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-locations--LocationID-" data-method="GET"
      data-path="api/locations/{LocationID}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-locations--LocationID-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-locations--LocationID-"
                    onclick="tryItOut('GETapi-locations--LocationID-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-locations--LocationID-"
                    onclick="cancelTryOut('GETapi-locations--LocationID-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-locations--LocationID-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/locations/{LocationID}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-locations--LocationID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-locations--LocationID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>LocationID</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="LocationID"                data-endpoint="GETapi-locations--LocationID-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="location"                data-endpoint="GETapi-locations--LocationID-"
               value="1"
               data-component="url">
    <br>
<p>ID lokacije. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="locations-PUTapi-locations--LocationID-">Ažuriraj lokaciju

Ažurira postojeću lokaciju po ID-u.</h2>

<p>
</p>



<span id="example-requests-PUTapi-locations--LocationID-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/locations/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"Name\": \"Warehouse 1\",
    \"Address\": \"Industrijska 12\",
    \"City\": \"Zagreb\",
    \"Country\": \"Hrvatska\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/locations/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "Name": "Warehouse 1",
    "Address": "Industrijska 12",
    "City": "Zagreb",
    "Country": "Hrvatska"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-locations--LocationID-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;id&quot;: 1,
  &quot;Name&quot;: &quot;Warehouse 1&quot;,
  &quot;City&quot;: &quot;Zagreb&quot;,
  ...
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-locations--LocationID-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-locations--LocationID-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-locations--LocationID-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-locations--LocationID-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-locations--LocationID-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-locations--LocationID-" data-method="PUT"
      data-path="api/locations/{LocationID}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-locations--LocationID-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-locations--LocationID-"
                    onclick="tryItOut('PUTapi-locations--LocationID-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-locations--LocationID-"
                    onclick="cancelTryOut('PUTapi-locations--LocationID-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-locations--LocationID-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/locations/{LocationID}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/locations/{LocationID}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-locations--LocationID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-locations--LocationID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>LocationID</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="LocationID"                data-endpoint="PUTapi-locations--LocationID-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="location"                data-endpoint="PUTapi-locations--LocationID-"
               value="1"
               data-component="url">
    <br>
<p>ID lokacije. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Name"                data-endpoint="PUTapi-locations--LocationID-"
               value="Warehouse 1"
               data-component="body">
    <br>
<p>Naziv lokacije. Example: <code>Warehouse 1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Address"                data-endpoint="PUTapi-locations--LocationID-"
               value="Industrijska 12"
               data-component="body">
    <br>
<p>Adresa. Example: <code>Industrijska 12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>City</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="City"                data-endpoint="PUTapi-locations--LocationID-"
               value="Zagreb"
               data-component="body">
    <br>
<p>Grad. Example: <code>Zagreb</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Country"                data-endpoint="PUTapi-locations--LocationID-"
               value="Hrvatska"
               data-component="body">
    <br>
<p>Država. Example: <code>Hrvatska</code></p>
        </div>
        </form>

                    <h2 id="locations-DELETEapi-locations--LocationID-">Obriši lokaciju

Briše lokaciju po ID-u.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-locations--LocationID-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/locations/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/locations/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-locations--LocationID-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Location deleted successfully.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-locations--LocationID-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-locations--LocationID-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-locations--LocationID-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-locations--LocationID-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-locations--LocationID-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-locations--LocationID-" data-method="DELETE"
      data-path="api/locations/{LocationID}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-locations--LocationID-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-locations--LocationID-"
                    onclick="tryItOut('DELETEapi-locations--LocationID-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-locations--LocationID-"
                    onclick="cancelTryOut('DELETEapi-locations--LocationID-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-locations--LocationID-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/locations/{LocationID}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-locations--LocationID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-locations--LocationID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>LocationID</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="LocationID"                data-endpoint="DELETEapi-locations--LocationID-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="location"                data-endpoint="DELETEapi-locations--LocationID-"
               value="1"
               data-component="url">
    <br>
<p>ID lokacije. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="product-photos">Product Photos</h1>

    

                                <h2 id="product-photos-GETapi-productphoto">Dohvati sve fotografije proizvoda

Vraća paginirani popis fotografija proizvoda (10 po stranici).</h2>

<p>
</p>



<span id="example-requests-GETapi-productphoto">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/productphoto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/productphoto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-productphoto">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;current_page&quot;: 1,
  &quot;data&quot;: [
    {
      &quot;id&quot;: 1,
      &quot;url&quot;: &quot;photos/photo1.jpg&quot;,
      &quot;description&quot;: &quot;Front view&quot;
    }
  ],
  &quot;total&quot;: 15,
  ...
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-productphoto" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-productphoto"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-productphoto"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-productphoto" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-productphoto">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-productphoto" data-method="GET"
      data-path="api/productphoto"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-productphoto', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-productphoto"
                    onclick="tryItOut('GETapi-productphoto');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-productphoto"
                    onclick="cancelTryOut('GETapi-productphoto');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-productphoto"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/productphoto</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-productphoto"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-productphoto"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="product-photos-POSTapi-productphoto">Dodaj novu fotografiju proizvoda

Kreira novu fotografiju s podacima o URL-u i opisu.</h2>

<p>
</p>



<span id="example-requests-POSTapi-productphoto">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/productphoto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"url\": \"photos\\/photo1.jpg\",
    \"description\": \"Slika sprijeda\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/productphoto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "url": "photos\/photo1.jpg",
    "description": "Slika sprijeda"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-productphoto">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 2,
    &quot;url&quot;: &quot;photos/photo1.jpg&quot;,
    &quot;description&quot;: &quot;Front view&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-productphoto" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-productphoto"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-productphoto"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-productphoto" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-productphoto">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-productphoto" data-method="POST"
      data-path="api/productphoto"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-productphoto', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-productphoto"
                    onclick="tryItOut('POSTapi-productphoto');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-productphoto"
                    onclick="cancelTryOut('POSTapi-productphoto');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-productphoto"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/productphoto</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-productphoto"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-productphoto"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="url"                data-endpoint="POSTapi-productphoto"
               value="photos/photo1.jpg"
               data-component="body">
    <br>
<p>Putanja slike. Example: <code>photos/photo1.jpg</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-productphoto"
               value="Slika sprijeda"
               data-component="body">
    <br>
<p>Opis slike. Example: <code>Slika sprijeda</code></p>
        </div>
        </form>

                    <h2 id="product-photos-GETapi-productphoto--id-">Dohvati jednu fotografiju proizvoda

Dohvaća jednu fotografiju po ID-u.</h2>

<p>
</p>



<span id="example-requests-GETapi-productphoto--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/productphoto/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/productphoto/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-productphoto--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;url&quot;: &quot;photos/photo1.jpg&quot;,
    &quot;description&quot;: &quot;Front view&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-productphoto--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-productphoto--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-productphoto--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-productphoto--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-productphoto--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-productphoto--id-" data-method="GET"
      data-path="api/productphoto/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-productphoto--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-productphoto--id-"
                    onclick="tryItOut('GETapi-productphoto--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-productphoto--id-"
                    onclick="cancelTryOut('GETapi-productphoto--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-productphoto--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/productphoto/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-productphoto--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-productphoto--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-productphoto--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the productphoto. Example: <code>17</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>productPhoto</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="productPhoto"                data-endpoint="GETapi-productphoto--id-"
               value="1"
               data-component="url">
    <br>
<p>ID fotografije. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="product-photos-PUTapi-productphoto--id-">Ažuriraj fotografiju proizvoda

Ažurira postojeću fotografiju.</h2>

<p>
</p>



<span id="example-requests-PUTapi-productphoto--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/productphoto/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"url\": \"photos\\/photo1.jpg\",
    \"description\": \"Slika sprijeda\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/productphoto/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "url": "photos\/photo1.jpg",
    "description": "Slika sprijeda"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-productphoto--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;url&quot;: &quot;photos/photo1.jpg&quot;,
    &quot;description&quot;: &quot;Front view&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-productphoto--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-productphoto--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-productphoto--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-productphoto--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-productphoto--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-productphoto--id-" data-method="PUT"
      data-path="api/productphoto/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-productphoto--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-productphoto--id-"
                    onclick="tryItOut('PUTapi-productphoto--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-productphoto--id-"
                    onclick="cancelTryOut('PUTapi-productphoto--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-productphoto--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/productphoto/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/productphoto/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-productphoto--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-productphoto--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-productphoto--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the productphoto. Example: <code>17</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>productPhoto</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="productPhoto"                data-endpoint="PUTapi-productphoto--id-"
               value="1"
               data-component="url">
    <br>
<p>ID fotografije. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="url"                data-endpoint="PUTapi-productphoto--id-"
               value="photos/photo1.jpg"
               data-component="body">
    <br>
<p>Putanja slike. Example: <code>photos/photo1.jpg</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-productphoto--id-"
               value="Slika sprijeda"
               data-component="body">
    <br>
<p>Opis slike. Example: <code>Slika sprijeda</code></p>
        </div>
        </form>

                    <h2 id="product-photos-DELETEapi-productphoto--id-">Obriši fotografiju proizvoda

Briše fotografiju po ID-u.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-productphoto--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/productphoto/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/productphoto/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-productphoto--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Product photo deleted successfully.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-productphoto--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-productphoto--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-productphoto--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-productphoto--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-productphoto--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-productphoto--id-" data-method="DELETE"
      data-path="api/productphoto/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-productphoto--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-productphoto--id-"
                    onclick="tryItOut('DELETEapi-productphoto--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-productphoto--id-"
                    onclick="cancelTryOut('DELETEapi-productphoto--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-productphoto--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/productphoto/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-productphoto--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-productphoto--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-productphoto--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the productphoto. Example: <code>17</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>productPhoto</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="productPhoto"                data-endpoint="DELETEapi-productphoto--id-"
               value="1"
               data-component="url">
    <br>
<p>ID fotografije. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="product-photos-GETapi-productphoto-image--id-">Prikaži stvarnu sliku

Vraća binarni sadržaj slike iz `storage/app/public/...`.</h2>

<p>
</p>



<span id="example-requests-GETapi-productphoto-image--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/productphoto/image/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/productphoto/image/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-productphoto-image--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">binary Image file</code>
 </pre>
    </span>
<span id="execution-results-GETapi-productphoto-image--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-productphoto-image--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-productphoto-image--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-productphoto-image--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-productphoto-image--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-productphoto-image--id-" data-method="GET"
      data-path="api/productphoto/image/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-productphoto-image--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-productphoto-image--id-"
                    onclick="tryItOut('GETapi-productphoto-image--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-productphoto-image--id-"
                    onclick="cancelTryOut('GETapi-productphoto-image--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-productphoto-image--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/productphoto/image/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-productphoto-image--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-productphoto-image--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-productphoto-image--id-"
               value="1"
               data-component="url">
    <br>
<p>ID fotografije. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="product-photos-GETapi-productphoto-prikazi--id-">Dohvati info o slici (prikazi)

Vraća samo `url` i `description` za sliku.</h2>

<p>
</p>



<span id="example-requests-GETapi-productphoto-prikazi--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/productphoto/prikazi/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/productphoto/prikazi/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-productphoto-prikazi--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;url&quot;: &quot;photos/photo1.jpg&quot;,
    &quot;description&quot;: &quot;Front view&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-productphoto-prikazi--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-productphoto-prikazi--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-productphoto-prikazi--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-productphoto-prikazi--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-productphoto-prikazi--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-productphoto-prikazi--id-" data-method="GET"
      data-path="api/productphoto/prikazi/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-productphoto-prikazi--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-productphoto-prikazi--id-"
                    onclick="tryItOut('GETapi-productphoto-prikazi--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-productphoto-prikazi--id-"
                    onclick="cancelTryOut('GETapi-productphoto-prikazi--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-productphoto-prikazi--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/productphoto/prikazi/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-productphoto-prikazi--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-productphoto-prikazi--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-productphoto-prikazi--id-"
               value="1"
               data-component="url">
    <br>
<p>ID fotografije. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="products">Products</h1>

    

                                <h2 id="products-GETapi-products">Dohvati sve proizvode

Vraća paginirani popis proizvoda (10 po stranici).</h2>

<p>
</p>



<span id="example-requests-GETapi-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;current_page&quot;: 1,
  &quot;data&quot;: [
    {
      &quot;id&quot;: 1,
      &quot;Name&quot;: &quot;Monitor 24\&quot;&quot;,
      &quot;Price&quot;: 120.99,
      ...
    }
  ],
  &quot;total&quot;: 100,
  ...
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products" data-method="GET"
      data-path="api/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products"
                    onclick="tryItOut('GETapi-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products"
                    onclick="cancelTryOut('GETapi-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="products-POSTapi-products">Dodaj novi proizvod

Stvara novi proizvod s danim podacima.</h2>

<p>
</p>



<span id="example-requests-POSTapi-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"Name\": \"Monitor 24\\\"\",
    \"Description\": \"LED IPS monitor\",
    \"Price\": 120.99,
    \"InStock\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "Name": "Monitor 24\"",
    "Description": "LED IPS monitor",
    "Price": 120.99,
    "InStock": true
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-products">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;id&quot;: 51,
  &quot;Name&quot;: &quot;Monitor 24\&quot;&quot;,
  &quot;Price&quot;: 120.99,
  ...
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-products" data-method="POST"
      data-path="api/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-products"
                    onclick="tryItOut('POSTapi-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-products"
                    onclick="cancelTryOut('POSTapi-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-products"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Name"                data-endpoint="POSTapi-products"
               value="Monitor 24""
               data-component="body">
    <br>
<p>Naziv proizvoda. Example: <code>Monitor 24"</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="Description"                data-endpoint="POSTapi-products"
               value="LED IPS monitor"
               data-component="body">
    <br>
<p>Opis proizvoda. Example: <code>LED IPS monitor</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="Price"                data-endpoint="POSTapi-products"
               value="120.99"
               data-component="body">
    <br>
<p>Cijena proizvoda. Example: <code>120.99</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>InStock</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-products" style="display: none">
            <input type="radio" name="InStock"
                   value="true"
                   data-endpoint="POSTapi-products"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-products" style="display: none">
            <input type="radio" name="InStock"
                   value="false"
                   data-endpoint="POSTapi-products"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Dostupnost na skladištu. Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="products-GETapi-products--ProductID-">Dohvati jedan proizvod

Dohvaća podatke o proizvodu prema ID-u.</h2>

<p>
</p>



<span id="example-requests-GETapi-products--ProductID-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/products/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/products/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products--ProductID-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;id&quot;: 1,
  &quot;Name&quot;: &quot;Monitor 24\&quot;&quot;,
  &quot;Price&quot;: 120.99,
  ...
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products--ProductID-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products--ProductID-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products--ProductID-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products--ProductID-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products--ProductID-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products--ProductID-" data-method="GET"
      data-path="api/products/{ProductID}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products--ProductID-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products--ProductID-"
                    onclick="tryItOut('GETapi-products--ProductID-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products--ProductID-"
                    onclick="cancelTryOut('GETapi-products--ProductID-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products--ProductID-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/{ProductID}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products--ProductID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products--ProductID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ProductID</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ProductID"                data-endpoint="GETapi-products--ProductID-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product"                data-endpoint="GETapi-products--ProductID-"
               value="1"
               data-component="url">
    <br>
<p>ID proizvoda. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="products-PUTapi-products--ProductID-">Ažuriraj proizvod

Ažurira podatke proizvoda po ID-u.</h2>

<p>
</p>



<span id="example-requests-PUTapi-products--ProductID-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/products/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"Name\": \"Monitor 24\\\"\",
    \"Description\": \"LED IPS monitor\",
    \"Price\": 120.99,
    \"InStock\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/products/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "Name": "Monitor 24\"",
    "Description": "LED IPS monitor",
    "Price": 120.99,
    "InStock": true
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-products--ProductID-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;id&quot;: 1,
  &quot;Name&quot;: &quot;Monitor 24\&quot;&quot;,
  &quot;Price&quot;: 120.99,
  ...
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-products--ProductID-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-products--ProductID-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-products--ProductID-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-products--ProductID-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-products--ProductID-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-products--ProductID-" data-method="PUT"
      data-path="api/products/{ProductID}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-products--ProductID-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-products--ProductID-"
                    onclick="tryItOut('PUTapi-products--ProductID-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-products--ProductID-"
                    onclick="cancelTryOut('PUTapi-products--ProductID-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-products--ProductID-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/products/{ProductID}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/products/{ProductID}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-products--ProductID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-products--ProductID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ProductID</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ProductID"                data-endpoint="PUTapi-products--ProductID-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product"                data-endpoint="PUTapi-products--ProductID-"
               value="1"
               data-component="url">
    <br>
<p>ID proizvoda. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Name"                data-endpoint="PUTapi-products--ProductID-"
               value="Monitor 24""
               data-component="body">
    <br>
<p>Naziv proizvoda. Example: <code>Monitor 24"</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="Description"                data-endpoint="PUTapi-products--ProductID-"
               value="LED IPS monitor"
               data-component="body">
    <br>
<p>Opis proizvoda. Example: <code>LED IPS monitor</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>Price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="Price"                data-endpoint="PUTapi-products--ProductID-"
               value="120.99"
               data-component="body">
    <br>
<p>Cijena proizvoda. Example: <code>120.99</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>InStock</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-products--ProductID-" style="display: none">
            <input type="radio" name="InStock"
                   value="true"
                   data-endpoint="PUTapi-products--ProductID-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-products--ProductID-" style="display: none">
            <input type="radio" name="InStock"
                   value="false"
                   data-endpoint="PUTapi-products--ProductID-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Dostupnost na skladištu. Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="products-DELETEapi-products--ProductID-">Obriši proizvod

Briše proizvod po ID-u.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-products--ProductID-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/products/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/products/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-products--ProductID-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Product deleted successfully.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-products--ProductID-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-products--ProductID-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-products--ProductID-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-products--ProductID-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-products--ProductID-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-products--ProductID-" data-method="DELETE"
      data-path="api/products/{ProductID}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-products--ProductID-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-products--ProductID-"
                    onclick="tryItOut('DELETEapi-products--ProductID-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-products--ProductID-"
                    onclick="cancelTryOut('DELETEapi-products--ProductID-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-products--ProductID-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/products/{ProductID}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-products--ProductID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-products--ProductID-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ProductID</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ProductID"                data-endpoint="DELETEapi-products--ProductID-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product"                data-endpoint="DELETEapi-products--ProductID-"
               value="1"
               data-component="url">
    <br>
<p>ID proizvoda. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
