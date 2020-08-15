<?php include "language.php"?>
<body>
<main>      
   <div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <div class="row center">
            <div class="col s12 m10 offset-m1 bottom-line">
              <h1 class="header"><?php echo $lang['events'];?></h1>
            </div>
            <div class="col s12 m8 offset-m2" style="padding-top: 30px;">
            <table>
              <thead>
                <tr>
                    <th>Local</th>
                    <th>Descrição</th>
                    <th>Intérprete</th>
                    <th>Data Início</th>
                    <th>Data Fim</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach($events as $row) {?>
                  <tr>
                    <td><?php echo $row->place;?></td>
                    <td><?php echo $row->description;?></td>        
                    <td><?php echo $row->name;?></td>
                    <td><?php echo $row->start_date;?></td>
                    <td><?php echo $row->end_date;?></td>
                  </tr>    
                <?php }?>
              </tbody>
            </table>
            </div> 
            <div class="col s12 m8 offset-m2" style="padding-top: 30px;">
              <div id='calendar'></div>
            </div> 
          </div>      
    </div>
</main>
<body> 

<!-- <div class="fixed-action-btn">
  <a  href="#addEventModal" class="btn-floating btn-large blue tooltipped modal-trigger" data-position="left" data-tooltip="New Event">
    <i class="large material-icons">add</i>
  </a>
</div> -->


<script>
$(document).ready(function(){
  debugger;
  var pendingEventArray = '<?php echo $pendingEventArray;?>';

  $('#calendar').fullCalendar({
      dayClick: function() 
      {
          alert('a day has been clicked!');
      },
      locale: CALENDAR_LANGUAGE,
      // events: [
      //   {
      //     title: 'All Day Event',
      //     start: '2019-04-04',
      //   },
      //   {
      //     title: 'Long Event',
      //     start: '2019-04-07',
      //     end: '2019-04-10'
      //   }
      // ]
      events: JSON.parse(pendingEventArray)
  });
});
</script>