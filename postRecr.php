<div class="tab-pane fade <?= (isset($_GET['id'])) ? 'show active' : '' ?>" id="v-pills-post" role="tabpanel" aria-labelledby="v-pills-post-tab">
    <div class="post-job-area ptb-100 pt-0">
        <div class="container">
        <?php if (isset($_SESSION['check'])) {

        echo "Dữ liệu đã được xử lý.";

    unset($_SESSION['check']);
    } else {?>
            <form action="index.php?act=post_recr" method="POST" onsubmit="return validateForm()">
                <div class="post-item">
                    <div class="section-title">
                        <h2>Thêm bài tuyển dụng</h2>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class=" form-group ">
                                <label>
                                    Tiêu đề :
                                </label>
                                <div class="form-group position-relative">
                                    <input name="job" type="text" class="searchSelect" id="searchaddress" placeholder="<?= checkfind('', 'Chuyên ngành'); ?> &darr;">
                                    <div class="dropdown-content" id="dropdownaddress">
                                        <div class="dropdown-item">Không chọn</div>
                                        <?php foreach ($datafilter as $cv) {
                                            extract($cv);
                                            if ($job !== '') { ?>
                                                <div class="dropdown-item"><?= $job ?></div>
                                            <?php } ?>
                                        <?php } ?>
                                        <div class="dropdown-item">Khác</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    Kiểu tuyển dụng :
                                </label>
                                <select name="type" title="Kiểu không được để trống !" required>
                                    <?php foreach ($datafilter as $v) { ?>
                                        <?php extract($v);
                                        if (isset($typeRecr) && $typeRecr != "") { ?>
                                            <option value="<?= $typeRecr ?>"> <?= $typeRecr ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>
                                    Kinh nghiệm :
                                </label>
                                <select name="exp" required>
                                    <?php foreach ($datafilter as $v) { ?>
                                        <?php extract($v);
                                        if (isset($exp) && $exp != "") { ?>
                                            <option value="<?= $exp ?>"> <?= $exp ?></option>
                                    <?php }
                                    } ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label>
                                    Ngôn ngữ :
                                </label>
                                <input type="text" class="form-control" name="progLang" placeholder="Web Developer" title="Ngôn ngữ không được để trống !" requiredd>
                            </div>
                            <div class="form-group">
                                <label>
                                    Mô tả công việc :
                                </label>
                                <textarea name="description" class="form-control" cols="30" rows="10" style="resize: vertical; height: 100px;" title="Mô tả không được để trống !" required></textarea>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Lương :
                                </label>
                                <select name="salary" title="Lương không được để trống !" required>
                                    <?php foreach ($datafilter as $v) { ?>
                                        <?php extract($v);
                                        if (isset($salary) && $salary != "") { ?>
                                            <option value="<?= $salary ?>"> <?= $salary ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>
                                    Cấp bậc / trình độ :
                                </label>
                                <select name="level" required>
                                    <?php foreach ($datafilter as $v) { ?>
                                        <?php extract($v);
                                        if (isset($level) && $level != "") { ?>
                                            <option value="<?= $level ?>"> <?= $level ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>



                            <div class="form-group">
                                <label for="expiryDate">Ngày hết hạn :</label>
                                <input type="date" class="form-control" name="end" id="expiryDate" oninput="checkExpiryDate(this)">
                                <p id="errorMessage" class="text-danger fst-italic"></p>
                            </div>

                            <div class="form-group">
                                <label>
                                    Yêu cầu công việc :
                                </label>
                                <textarea name="request" class="form-control" cols="30" rows="10" style="resize: vertical;height: 100px;" title="Mô tả không được để trống !" required></textarea>
                            </div>
                        </div>

                    </div>
                    <button type="submit" name="add_recr" class="btn">Thêm </button>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</div>