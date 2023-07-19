<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KPI Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <!-- The bootstrap 5 tutorial is available here: https://www.w3schools.com/bootstrap5/index.php 
    and here:https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
    <!-- The Chart JS manual is available here: https://www.chartjs.org/docs/latest/charts/area.html -->
    <div class="row">
      <div class="col-md-2 bg-light bg-gradient">
        <h1>Business-Facing Analytics Dashboard</h1>
        <div style="color:#354E9D">
          <strong>BBT4106 and BBT4206: Business Intelligence Project (and BI1 Take-Away CAT 2)<br /></strong>
          <strong><br />Name:Ibrahim Mohamed<br /></strong>
          <strong>Student ID:134985<br /></strong>
          <a href="{{URL('adddata')}}" class="m-3 btn btn-success"><strong>Add data</strong></a>
        </div>
        <br />
        <strong>Kaplan and Nortons Balanced Scorecard</strong>
          <ul>
            <li>Financial Perspective (KPI1a and KPI1b)</li>
            <li>Customer Perspective (KPI2a and KPI2b)</li>
            <li>Internal Business Processes Perspective (KPI3a and KPI3b)</li>
            <li>Innovation and Learning Perspective (KPI4a and KPI4b)</li>
          </ul>
      </div>
      <div class="col-md-10 row">
  






@extends('kpi4')
@extends('kpi3')
@extends('kpi2')
@extends('kpi1')

@extends('keymetrics')

















    <!-- Start of KPI DIVs -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   
 
  </body>
</html>