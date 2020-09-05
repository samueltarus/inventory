


<html>
    <head>
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- <link href="{{public_path('css/pdf.css') }}" rel="stylesheet" type="text/css" /> --}}
    </head>
    <body>

<style>
    html, body{
               background-color: #fff;
               color: #636b6f;
               font-family: 'Nunito', sans-serif;
               font-weight: 200;
               height: 100vh;
               margin: 0;
           }
   .invoice{
   padding: 30px;
}

.invoice {
   position: relative;
   background-color: #FFF;
   min-height: 680px;
   padding: 15px
}

.invoice header {
   padding: 10px 0;
   margin-bottom: 20px;
   border-bottom: 1px solid #3989c6
}

.invoice .company-details {
   text-align: right
}

.invoice .company-details .name {
   margin-top: 0;
   margin-bottom: 0
}

.invoice .contacts {
   margin-bottom: 20px
}

.invoice .invoice-to {
   text-align: left
}

.invoice .invoice-to .to {
   margin-top: 0;
   margin-bottom: 0
}

.invoice .invoice-details {
   text-align: right
}

.invoice .invoice-details .invoice-id {
   margin-top: 0;
   color: #3989c6
}

.invoice main {
   padding-bottom: 50px
}

.invoice main .thanks {
   margin-top: -100px;
   font-size: 2em;
   margin-bottom: 50px
}

.invoice main .notices {
   padding-left: 6px;
   border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
   font-size: 1.2em
}

.invoice table {
   width: 100%;
   border-collapse: collapse;
   border-spacing: 0;
   margin-bottom: 20px
}

.invoice table td,.invoice table th {
   padding: 15px;
   background: #eee;
   border-bottom: 1px solid #fff
}

.invoice table th {
   white-space: nowrap;
   font-weight: 400;
   font-size: 16px
}

.invoice table td h3 {
   margin: 0;
   font-weight: 400;
   color: #3989c6;
   font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
   text-align: right;
   font-size: 1.2em
}

.invoice table .no {
   color: #fff;
   font-size: 1.6em;
   background: #3989c6
}

.invoice table .unit {
   background: #ddd
}

.invoice table .total {
   background: #3989c6;
   color: #fff
}

.invoice table tbody tr:last-child td {
   border: none
}

.invoice table tfoot td {
   background: 0 0;
   border-bottom: none;
   white-space: nowrap;
   text-align: right;
   padding: 10px 20px;
   font-size: 1.2em;
   border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
   border-top: none
}

.invoice table tfoot tr:last-child td {
   color: #3989c6;
   font-size: 1.4em;
   border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
   border: none
}

.invoice footer {
   width: 100%;
   text-align: center;
   color: #777;
   border-top: 1px solid #aaa;
   padding: 8px 0
}

@media print {
   .invoice {
       font-size: 11px!important;
       overflow: hidden!important
   }

   .invoice footer {
       position: absolute;
       bottom: 10px;
       page-break-after: always
   }

   .invoice>div:last-child {
       page-break-before: always
   }
}
</style>

<div class="container">
   <div class="row">
       <div class="col-12">
           <div class="card">
               <div class="card-body p-0">
                   <div class="row p-5">
                       <div class="col-md-6">
                           <img src="http://via.placeholder.com/400x90?text=logo">
                       </div>

                       <div class="col-md-6 text-right">
                           <p class="font-weight-bold mb-1">Invoice #550</p>
                           <p class="text-muted">Due to: 4 Dec, 2019</p>
                       </div>
                   </div>

                   <hr class="my-5">

                   <div class="row pb-5 p-5">
                       <div class="col-md-6">
                           <p class="font-weight-bold mb-4">Client Information</p>
                           <p class="mb-1">John Doe, Mrs Emma Downson</p>
                           <p>Acme Inc</p>
                           <p class="mb-1">Berlin, Germany</p>
                           <p class="mb-1">6781 45P</p>
                       </div>

                       <div class="col-md-6 text-right">
                           <p class="font-weight-bold mb-4">Payment Details</p>
                           <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                           <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                           <p class="mb-1"><span class="text-muted">Payment Type: </span> Root</p>
                           <p class="mb-1"><span class="text-muted">Name: </span> John Doe</p>
                       </div>
                   </div>

                   <div class="row p-5">
                       <div class="col-md-12">
                           <table class="table">
                               <thead>
                                   <tr>
                                       <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                       <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                       <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                       <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                       <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                       <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>1</td>
                                       <td>Software</td>
                                       <td>LTS Versions</td>
                                       <td>21</td>
                                       <td>$321</td>
                                       <td>$3452</td>
                                   </tr>
                                   <tr>
                                       <td>1</td>
                                       <td>Software</td>
                                       <td>Support</td>
                                       <td>234</td>
                                       <td>$6356</td>
                                       <td>$23423</td>
                                   </tr>
                                   <tr>
                                       <td>1</td>
                                       <td>Software</td>
                                       <td>Sofware Collection</td>
                                       <td>4534</td>
                                       <td>$354</td>
                                       <td>$23434</td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>

                   <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                       <div class="py-3 px-5 text-right">
                           <div class="mb-2">Grand Total</div>
                           <div class="h2 font-weight-light">$234,234</div>
                       </div>

                       <div class="py-3 px-5 text-right">
                           <div class="mb-2">Discount</div>
                           <div class="h2 font-weight-light">10%</div>
                       </div>

                       <div class="py-3 px-5 text-right">
                           <div class="mb-2">Sub - Total amount</div>
                           <div class="h2 font-weight-light">$32,432</div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

    </body>
</html>
