<table class="table table-striped table-bordered data-transaksi">
    <thead>
        <tr class="success">
            <td>File</td>
            <!-- <td>Aksi</td> -->
        </tr>
    </thead>
    <tbody id="table-">
        <?php
            $thelist = '';
            if ($handle = opendir('addfile/')) {
              while (false !== ($file = readdir($handle)))
              {
                  if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'sql')
                  {
                      $thelist .= '<tr><td><a href="'.$file.'">'.$file.'</a></td></tr>';
                  }
              }
              closedir($handle);
            }
            
            echo $thelist;
        ?>
    </tbody>
</table>