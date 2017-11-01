

            <div id="myModalOffers" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php $lang = $this->lang->lang(); $title = "title_".$lang; echo $result->$title ?>(currency VND)</h4>
                  </div>
                  <div class="modal-body">
                    <div class="tab-price">
                      <table>
                          <thead>
                              <tr>
                                  <th>Date</th>
                                  <th>Rate</th>
                                  <th>VAT 10%</th>
                                  <th>Service Charge 5%</th>
                                  <th>TOTAL</th>
                              </tr>
                          </thead>
                          <?php if ($totalday==''){
                                echo "no data";
                          }else{?>
                          <?php for($i=0; $i<$totalday;$i++){?>
                          <tr>
                              <td class="other-date">
                                  <?php $date = date('d-m-Y', strtotime('+'.$i. 'day', strtotime($checkindate))); echo $date; ?>
                              </td>
                              <td class="other-date">
                                  <span class="format-price"><?php echo $result->price*(100-$result->discount)/100 ?></span>
                              </td>
                              <td class="other-date">
                                  <span class="format-price"><?php echo ($result->price*(100-$result->discount)/100)*(10/100) ?></span>
                              </td>
                              <td class="other-date">
                                   <span class="format-price"><?php echo ($result->price*(100-$result->discount)/100)*(5/100) ?></span>
                              </td>
                              <td class="other-date">
                                  <span class="format-price"><?php echo (($result->price*(100-$result->discount)/100)*(15/100))+($result->price*(100-$result->discount)/100) ?> </span>
                              </td>
                          </tr>
                          <?php } ?>
                          <?php } ?>
                      </table>
                    </div>
                  </div>
                  <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div> -->
                </div>
              </div>
            </div>
            <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/jquery.number.js"></script>


            <script type="text/javascript">
                    $(".format-price").number( true,0);
            </script>




	       