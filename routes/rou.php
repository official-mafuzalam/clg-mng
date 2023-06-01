// Teacher Section

Route::get('/teacher_add', [TeacherController::class, 'TeacherAddPage'])->name('teacher.addPage');

Route::post('/teacher_add', [TeacherController::class, 'TeacherAdd'])->name('teacher.add');

Route::get('/teacher_all', [TeacherController::class, 'TeacherALL'])->name('teacher.all');

Route::get('/teacher_edit/{id}', [TeacherController::class, 'TeacherEdit'])->name('teacher.edit');

Route::post('/teacher_update/{id}', [TeacherController::class, 'TeacherUpdate'])->name('teacher.update');

Route::get('/teacher_trash', [TeacherController::class, 'TeacherTrashPage'])->name('teacher.trashPage');

Route::get('/teacher_trash/{id}', [TeacherController::class, 'TeacherTrash'])->name('teacher.trash');

Route::get('/teacher_delete/{id}', [TeacherController::class, 'TeacherDelete'])->name('teacher.delete');

Route::get('/teacher_restore/{id}', [TeacherController::class, 'TeacherRestore'])->name('teacher.restore');



// Notice Section

Route::get('/notice_add', [NoticeController::class, 'NoticeAddPage'])->name('notice.addPage');

Route::post('/notice_add', [NoticeController::class, 'NoticeAdd'])->name('notice.add');

Route::get('/notice_all', [NoticeController::class, 'NoticeAll'])->name('notice.all');

Route::get('/notice_edit/{id}', [NoticeController::class, 'NoticeEdit'])->name('notice.edit');

Route::post('/notice_update/{id}', [NoticeController::class, 'NoticeUpdate'])->name('notice.update');

Route::get('/notice_archive', [NoticeController::class, 'NoticeArchivePage'])->name('notice.archivePage');

Route::get('/notice_archive/{id}', [NoticeController::class, 'NoticeArchive'])->name('notice.archive');

Route::get('/notice_recycle/{id}', [NoticeController::class, 'NoticeRecycle'])->name('notice.recycle');

Route::get('/notice_delete/{id}', [NoticeController::class, 'NoticeDelete'])->name('notice.delete');


// Course Section
Route::get('course_add', [CourseController::class, 'CourseAddPage'])->name('course.addPage');

Route::post('course_add', [CourseController::class, 'CourseAdd'])->name('course.add');

Route::get('course_all', [CourseController::class, 'CourseAllPage'])->name('course.allPage');

Route::get('/course_edit/{id}', [CourseController::class, 'CourseEdit'])->name('course.edit');

Route::post('/course_update/{id}', [CourseController::class, 'CourseUpdate'])->name('course.update');

Route::get('/course_delete/{id}', [CourseController::class, 'CourseDelete'])->name('course.delete');


// Result Section
Route::get('/result_publish', [ResultController::class, 'ResultPublishPage'])->name('result.publishPage');

Route::post('/result_publish', [ResultController::class, 'ResultPublish'])->name('result.publish');

Route::get('/result_process', [ResultController::class, 'ResultProcess'])->name('result.process');

Route::post('/save_marks', [ResultController::class, 'ResultSaveMarks'])->name('save_marks');

Route::get('/result_check', [ResultController::class, 'ResultCheckPage'])->name('result.checkPage');

Route::post('/result_check', [ResultController::class, 'ResultCheck'])->name('result.check');

Route::get('/result_edit/{id}', [ResultController::class, 'ResultEdit'])->name('result.edit');

Route::post('/result_update/{id}', [ResultController::class, 'ResultUpdate'])->name('result.update');

// Deposit Section

Route::get('/depositor_find', [DepositController::class, 'DepositFindPage'])->name('deposit.findPage');

Route::get('/deposit_form/{id}', [DepositController::class, 'DepositForm'])->name('deposit.form');

Route::post('/deposit_confirm', [DepositController::class, 'DepositConfirm'])->name('deposit.confirm');

Route::get('/deposit_print/{id}', [DepositController::class, 'DepositPrint'])->name('deposit.print');


Route::get('/deposit_quarry', [DepositController::class, 'DepositQuarry'])->name('deposit.quarry');
//

// Teacher Section

Route::get('/teacher_add', [TeacherController::class, 'TeacherAddPage'])->name('teacher.addPage');

Route::post('/teacher_add', [TeacherController::class, 'TeacherAdd'])->name('teacher.add');

Route::get('/teacher_all', [TeacherController::class, 'TeacherALL'])->name('teacher.all');

Route::get('/teacher_edit/{id}', [TeacherController::class, 'TeacherEdit'])->name('teacher.edit');

Route::post('/teacher_update/{id}', [TeacherController::class, 'TeacherUpdate'])->name('teacher.update');

Route::get('/teacher_trash', [TeacherController::class, 'TeacherTrashPage'])->name('teacher.trashPage');

Route::get('/teacher_trash/{id}', [TeacherController::class, 'TeacherTrash'])->name('teacher.trash');

Route::get('/teacher_delete/{id}', [TeacherController::class, 'TeacherDelete'])->name('teacher.delete');

Route::get('/teacher_restore/{id}', [TeacherController::class, 'TeacherRestore'])->name('teacher.restore');



// Notice Section

Route::get('/notice_add', [NoticeController::class, 'NoticeAddPage'])->name('notice.addPage');

Route::post('/notice_add', [NoticeController::class, 'NoticeAdd'])->name('notice.add');

Route::get('/notice_all', [NoticeController::class, 'NoticeAll'])->name('notice.all');

Route::get('/notice_edit/{id}', [NoticeController::class, 'NoticeEdit'])->name('notice.edit');

Route::post('/notice_update/{id}', [NoticeController::class, 'NoticeUpdate'])->name('notice.update');

Route::get('/notice_archive', [NoticeController::class, 'NoticeArchivePage'])->name('notice.archivePage');

Route::get('/notice_archive/{id}', [NoticeController::class, 'NoticeArchive'])->name('notice.archive');

Route::get('/notice_recycle/{id}', [NoticeController::class, 'NoticeRecycle'])->name('notice.recycle');

Route::get('/notice_delete/{id}', [NoticeController::class, 'NoticeDelete'])->name('notice.delete');


// Course Section
Route::get('course_add', [CourseController::class, 'CourseAddPage'])->name('course.addPage');

Route::post('course_add', [CourseController::class, 'CourseAdd'])->name('course.add');

Route::get('course_all', [CourseController::class, 'CourseAllPage'])->name('course.allPage');

Route::get('/course_edit/{id}', [CourseController::class, 'CourseEdit'])->name('course.edit');

Route::post('/course_update/{id}', [CourseController::class, 'CourseUpdate'])->name('course.update');

Route::get('/course_delete/{id}', [CourseController::class, 'CourseDelete'])->name('course.delete');


// Result Section
Route::get('/result_publish', [ResultController::class, 'ResultPublishPage'])->name('result.publishPage');

Route::post('/result_publish', [ResultController::class, 'ResultPublish'])->name('result.publish');

Route::get('/result_process', [ResultController::class, 'ResultProcess'])->name('result.process');

Route::post('/save_marks', [ResultController::class, 'ResultSaveMarks'])->name('save_marks');

Route::get('/result_check', [ResultController::class, 'ResultCheckPage'])->name('result.checkPage');

Route::post('/result_check', [ResultController::class, 'ResultCheck'])->name('result.check');

Route::get('/result_edit/{id}', [ResultController::class, 'ResultEdit'])->name('result.edit');

Route::post('/result_update/{id}', [ResultController::class, 'ResultUpdate'])->name('result.update');

// Deposit Section

Route::get('/depositor_find', [DepositController::class, 'DepositFindPage'])->name('deposit.findPage');

Route::get('/deposit_form/{id}', [DepositController::class, 'DepositForm'])->name('deposit.form');

Route::post('/deposit_confirm', [DepositController::class, 'DepositConfirm'])->name('deposit.confirm');

Route::get('/deposit_print/{id}', [DepositController::class, 'DepositPrint'])->name('deposit.print');


Route::get('/deposit_quarry', [DepositController::class, 'DepositQuarry'])->name('deposit.quarry');
//

// Teacher Section

Route::get('/teacher_add', [TeacherController::class, 'TeacherAddPage'])->name('teacher.addPage');

Route::post('/teacher_add', [TeacherController::class, 'TeacherAdd'])->name('teacher.add');

Route::get('/teacher_all', [TeacherController::class, 'TeacherALL'])->name('teacher.all');

Route::get('/teacher_edit/{id}', [TeacherController::class, 'TeacherEdit'])->name('teacher.edit');

Route::post('/teacher_update/{id}', [TeacherController::class, 'TeacherUpdate'])->name('teacher.update');

Route::get('/teacher_trash', [TeacherController::class, 'TeacherTrashPage'])->name('teacher.trashPage');

Route::get('/teacher_trash/{id}', [TeacherController::class, 'TeacherTrash'])->name('teacher.trash');

Route::get('/teacher_delete/{id}', [TeacherController::class, 'TeacherDelete'])->name('teacher.delete');

Route::get('/teacher_restore/{id}', [TeacherController::class, 'TeacherRestore'])->name('teacher.restore');



// Notice Section

Route::get('/notice_add', [NoticeController::class, 'NoticeAddPage'])->name('notice.addPage');

Route::post('/notice_add', [NoticeController::class, 'NoticeAdd'])->name('notice.add');

Route::get('/notice_all', [NoticeController::class, 'NoticeAll'])->name('notice.all');

Route::get('/notice_edit/{id}', [NoticeController::class, 'NoticeEdit'])->name('notice.edit');

Route::post('/notice_update/{id}', [NoticeController::class, 'NoticeUpdate'])->name('notice.update');

Route::get('/notice_archive', [NoticeController::class, 'NoticeArchivePage'])->name('notice.archivePage');

Route::get('/notice_archive/{id}', [NoticeController::class, 'NoticeArchive'])->name('notice.archive');

Route::get('/notice_recycle/{id}', [NoticeController::class, 'NoticeRecycle'])->name('notice.recycle');

Route::get('/notice_delete/{id}', [NoticeController::class, 'NoticeDelete'])->name('notice.delete');


// Course Section
Route::get('course_add', [CourseController::class, 'CourseAddPage'])->name('course.addPage');

Route::post('course_add', [CourseController::class, 'CourseAdd'])->name('course.add');

Route::get('course_all', [CourseController::class, 'CourseAllPage'])->name('course.allPage');

Route::get('/course_edit/{id}', [CourseController::class, 'CourseEdit'])->name('course.edit');

Route::post('/course_update/{id}', [CourseController::class, 'CourseUpdate'])->name('course.update');

Route::get('/course_delete/{id}', [CourseController::class, 'CourseDelete'])->name('course.delete');


// Result Section
Route::get('/result_publish', [ResultController::class, 'ResultPublishPage'])->name('result.publishPage');

Route::post('/result_publish', [ResultController::class, 'ResultPublish'])->name('result.publish');

Route::get('/result_process', [ResultController::class, 'ResultProcess'])->name('result.process');

Route::post('/save_marks', [ResultController::class, 'ResultSaveMarks'])->name('save_marks');

Route::get('/result_check', [ResultController::class, 'ResultCheckPage'])->name('result.checkPage');

Route::post('/result_check', [ResultController::class, 'ResultCheck'])->name('result.check');

Route::get('/result_edit/{id}', [ResultController::class, 'ResultEdit'])->name('result.edit');

Route::post('/result_update/{id}', [ResultController::class, 'ResultUpdate'])->name('result.update');

// Deposit Section

Route::get('/depositor_find', [DepositController::class, 'DepositFindPage'])->name('deposit.findPage');

Route::get('/deposit_form/{id}', [DepositController::class, 'DepositForm'])->name('deposit.form');

Route::post('/deposit_confirm', [DepositController::class, 'DepositConfirm'])->name('deposit.confirm');

Route::get('/deposit_print/{id}', [DepositController::class, 'DepositPrint'])->name('deposit.print');


Route::get('/deposit_quarry', [DepositController::class, 'DepositQuarry'])->name('deposit.quarry');
//