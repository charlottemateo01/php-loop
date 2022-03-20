<?php
$myFavoriteSongs = array(
    (object)array(
        "Title" => "Stuck", 
        "Artist" => "Darren Espanto",
        "TrackDuration" => "04:30",
        "Composer" => "Darren Espanto",
        "ReleaseDate" => 2014,
        "Actions" => "<a href='song links/stuck.html'>View Lyrics</a>",
        "Songs" => "<a href='https://youtu.be/kCa6wnwgnYQ'>View Song</a>"
    ),
    (object)array(
        "Title" => "Mapa", 
        "Artist" => "SB19",
        "TrackDuration" => "04:51",
        "Composer" => "John Paulo Nase",
        "ReleaseDate" => 2021,
        "Actions" => "<a href='song links/mapa.html'>View Lyrics</a>",
        "Songs" => "<a href='https://youtu.be/DDyr3DbTPtk'>View Song</a>"
    ),
    (object)array(
        "Title" => "Statue", 
        "Artist" => "Lil Eddie",
        "TrackDuration" => "04:14",
        "Composer" => "Edwin Serrano",
        "ReleaseDate" => 2009,
        "Actions" => "<a href='song links/statue.html'>View Lyrics</a>",
        "Songs" => "<a href='https://youtu.be/MLXnN_yeW8U'>View Song</a>"
    ),
    (object)array(
        "Title" => "My Heart Will Go On", 
        "Artist" => "Celine Dion",
        "TrackDuration" => "06:03",
        "Composer" => "Celine Dion",
        "ReleaseDate" => 1997,
        "Actions" => "<a href='song links/my heart will go on.html'>View Lyrics</a>",
        "Songs" => "<a href='https://youtu.be/pDwkVKGAVGM'>View Song</a>"
    ),
    (object)array(
        "Title" => "10,000 Reasons", 
        "Artist" => "Matt Redman",
        "TrackDuration" => "05:43",
        "Composer" => "Matt Redman and Jonas Myrin",
        "ReleaseDate" => 2012,
        "Actions" => "<a href='song links/my heart will go on.html'>View Lyrics</a>",
        "Songs" => "<a href='https://youtu.be/DXDGE_lRI0E'>View Song</a>"
    ),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 5 Songs</title>
</head>
<body>
  <h1>Top 5 Favorite Songs of Charlotte Mateo</h1>
  <table table border = '1' cellspacing = '0' cellpadding='10' style="text-align: center;">
      <thead>
          <th>Title</th>
          <th>Artist</th>
          <th>Track Duration</th>
          <th>Composer</th>
          <th>Release Date</th>
          <th>Actions</th>
          <th>Songs</th>
      </thead>
      <tbody>
          <?php foreach($myFavoriteSongs as $row){?>
           <tr>
               <td><?=$row->Title?></td>
               <td><?=$row->Artist?></td>
               <td><?=$row->TrackDuration?></td>
               <td><?=$row->Composer?></td>
               <td><?=$row->ReleaseDate?></td>
               <td><?=$row->Actions?></td>
               <td><?=$row->Songs?></td>
           </tr>
          <?php }?>
      </tbody>
  </table>
</body>
</html>