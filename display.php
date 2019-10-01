<?php
    function getPlanning(string $dateA, string $dateB){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://www.myefrei.fr/api/extranet/student/queries/planning?enddate='.$dateA.'&startdate='.$dateB);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

        $headers = array();
        $headers[] = 'Connection: keep-alive';
        $headers[] = 'Cache-Control: max-age=0';
        $headers[] = 'Upgrade-Insecure-Requests: 1';
        $headers[] = 'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36';
        $headers[] = 'Sec-Fetch-Mode: navigate';
        $headers[] = 'Sec-Fetch-User: ?1';
        $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
        $headers[] = 'Sec-Fetch-Site: none';
        $headers[] = 'Accept-Encoding: gzip, deflate, br';
        $headers[] = 'Accept-Language: fr-FR,fr;q=0.9,en-US;q=0.8,en;q=0.7';
        $headers[] = 'Cookie: _ga=GA1.2.851516099.1569678791; _gid=GA1.2.1377099633.1569849279; SESSION=9772a645-5d1d-46db-ae24-789485459439; XSRF-TOKEN=1a3e6618-03f4-45db-b9f7-6ee1e9c6626c';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return $result;

    }
    $planning = getPlanning("2019-10-01", "2019-10-01");

    print_r(json_decode($planning));

    function parseData(string $data){
        //prgoOfferingDesc = cours
        //srvTimeCrDelRoom = salle
        //timeCrTimeFrom = deb
        //timeCrTimeTo = fin
        //srvTimeCrDateFrom = date
    }

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Planning</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <div>
      <form action="/.controller.php" method="get" id="form">
          <input type="date" name="dateA"/>
          <input type="date" name="dateA"/>
         <button> Submit </button>
      </form>
  </div>
</body>
</html>