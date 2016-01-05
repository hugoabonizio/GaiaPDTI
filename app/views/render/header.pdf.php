<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Header and Footer example</title>
    <style type="text/css">
      @page {
        margin: 2cm;
      }
      
      body {
        font-family: sans-serif;
        margin: 0.5cm 0;
        text-align: justify;
        counter-reset: page -1;
      }

      #header,
      #footer {
        position: fixed;
        left: 0;
        right: 0;
        color: #aaa;
        font-size: 0.9em;
      }

      #header {
        top: 0;
/*         border-bottom: 0.1pt solid #aaa; */
      }

      #footer {
        bottom: 0;
/*         border-top: 0.1pt solid #aaa; */
      }

      #header table,
      #footer table {
        width: 100%;
        border-collapse: collapse;
        border: none;
      }

      #header td,
      #footer td {
        padding: 0;
        width: 50%;
      }

      .page-number {
        text-align: right;
      }

      .page-number:before {
/*         content: "Pagina " counter(page); */
        content: counter(page);
      }

      hr {
        page-break-after: always;
        border: 0;
      }
      #cover {
        page-break-after: always;
        text-align: center;
      }
      
      #doc-content {
        counter-reset: page;
      }
    </style>
  </head>

<body>
  