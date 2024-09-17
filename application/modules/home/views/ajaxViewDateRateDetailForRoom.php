


            <div id="myModalRooms" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php $lang = $this->lang->lang(); $name = "name_".$lang; echo $result->$name ?>(Currency VND)</h4>
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
                          <?php if ($PriceOfDate==''){
                                echo "no data";
                            }else{?>
                          <?php foreach ($PriceOfDate as $key => $value): ;?>
                                <tr >
                                  <td class="other-date">
                                      <?php echo $value['date']; ?>
                                  </td>
                                  <td class="other-date">
                                      <span class="format-price"><?php echo $value['price']?></span>
                                  </td>
                                  <td class="other-date">
                                      <span class="format-price"><?php echo ($value['price']*10/100)?></span>
                                  </td>
                                  <td class="other-date">
                                       <span class="format-price"><?php echo ($value['price']*5/100)?></span>
                                  </td>
                                  <td class="other-date">
                                      <span class="format-price"><?php echo ($value['price']+($value['price']*10/100)+($value['price']*5/100))?></span>
                                  </td>
                              </tr>
                          <?php endforeach ?>
                          <?php }?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/jquery.number.js"></script>
            <script type="text/javascript">
                    $(".format-price").number( true,0);
            </script>




	       