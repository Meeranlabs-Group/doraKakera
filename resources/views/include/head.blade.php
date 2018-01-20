<?php function nice_number($n) {
// first strip any formatting;
    $n = (0+str_replace(",", "", $n));

// is this a number?
    if (!is_numeric($n)) return false;

// now filter it;
    if ($n > 1000000000000) return round(($n/1000000000000), 2).' trillion';
    elseif ($n > 1000000000) return round(($n/1000000000), 2).' billion';
    elseif ($n > 1000000) return round(($n/1000000), 2).' million';
    elseif ($n > 1000) return round(($n/1000), 2).' thousand';

    return number_format($n);
}
?>

<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--<meta name="author" content="Meeranlabs">--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">



   
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="manifest" href={{ url("assets/manifest.json") }}>
   



    @if((Request::is('dha-file-rates')))

        <meta name="description" content="DHA File Rates File rates are Volatile and subject to change any
        time. For latest updates please call +923028444781 or email"/>
        <meta name="robots" content="index,nofollow"/>
        <meta name="keywords" content="DHA File Rates , Plot For Sale in DHA Phase 1
        ,Plot For Sale in DHA Phase 2,Plot For Sale in DHA Phase 4,
        Plot For Sale in DHA Phase 5,Plot For Sale in DHA Phase 6,
        Plot For Sale in DHA Phase 7,Plot For Sale in DHA Phase 8
        ,Plot For Sale in DHA Phase 9 Prism, Plot For Sale in DHA Phase 9 Town, Plot For Sale in DHA Phase 10"/>

    @endif




    
    <link href={{ url("assets/fonts/elegant-fonts.css") }} rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href={{ url("assets/bootstrap/css/bootstrap.css") }} type="text/css">
    <link rel="stylesheet" href={{ url("assets/css/owl.carousel.css") }} type="text/css">
    <link rel="stylesheet" href={{ url("assets/css/style.css") }} type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">





    <title>Chohan Estate</title>

</head>

<body>