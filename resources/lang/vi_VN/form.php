<?php

/**
 * form.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // new user:
    'bank_name'                 => 'Tên ngân hàng',
    'bank_balance'              => 'Số dư',
    'savings_balance'           => 'Số dư tiết kiệm',
    'credit_card_limit'         => 'Hạn mức thẻ tín dụng',
    'automatch'                 => 'Tự động khớp',
    'skip'                      => 'Bỏ qua',
    'enabled'                   => 'Cho phép',
    'name'                      => 'Tên',
    'active'                    => 'Hành động',
    'amount_min'                => 'Số tiền tối thiểu',
    'amount_max'                => 'Số tiền tối đa',
    'match'                     => 'Matches on',
    'strict'                    => 'Chế độ nghiêm ngặt',
    'repeat_freq'               => 'Lặp lại',
    'location'                  => 'Vị trí',
    'update_channel'            => 'Cập nhật kênh',
    'journal_currency_id'       => 'Tiền tệ',
    'currency_id'               => 'Tiền tệ',
    'transaction_currency_id'   => 'Tiền tệ',
    'auto_budget_currency_id'   => 'Currency',
    'external_ip'               => 'IP của máy chủ bạn',
    'attachments'               => 'Tài liệu đính kèm',
    'journal_amount'            => 'Số tiền',
    'journal_source_name'       => 'Tài khoản thu nhập (source)',
    'keep_bill_id'              => 'Hóa đơn',
    'journal_source_id'         => 'tài khoản (source)',
    'BIC'                       => 'BIC',
    'verify_password'           => 'Xác minh bảo mật mật khẩu',
    'source_account'            => 'Tài khoản gửi',
    'destination_account'       => 'Tài khoản nhận',
    'journal_destination_id'    => 'tài khoản (destination)',
    'asset_destination_account' => 'Tài khoản đích',
    'include_net_worth'         => 'Include in net worth',
    'asset_source_account'      => 'Tài khoản nguồn',
    'journal_description'       => 'Mô tả',
    'note'                      => 'Ghi chú',
    'store_new_transaction'       => 'Lưu trữ giao dịch mới',
    'split_journal'               => 'Tách giao dịch này',
    'split_journal_explanation'   => 'Tách giao dịch này thành nhiều phần',
    'currency'                    => 'Tiền tệ',
    'account_id'                  => 'tài khoản',
    'budget_id'                   => 'Ngân sách',
    'opening_balance'             => 'Số dư đầu kỳ',
    'tagMode'                     => 'Chế độ thẻ(tag)',
    'tag_position'                => 'Vị trí thẻ(tag)',
    'virtual_balance'             => 'Cân bằng ảo',
    'targetamount'                => 'Số tiền mục tiêu',
    'account_role'                => 'Vai trò tài khoản',
    'opening_balance_date'        => 'Ngày mở số dư',
    'cc_type'                     => 'Gói thanh toán thẻ tín dụng',
    'cc_monthly_payment_date'     => 'Ngày thanh toán thẻ tín dụng hàng tháng',
    'piggy_bank_id'               => 'Con heo đất',
    'returnHere'                  => 'Quay lại đây',
    'returnHereExplanation'       => 'Sau khi lưu, quay lại đây để tạo cái khác.',
    'returnHereUpdateExplanation' => 'Sau khi cập nhật, quay lại đây.',
    'description'                 => 'Mô tả',
    'expense_account'             => 'Tài khoản sài',
    'revenue_account'             => 'Tài khoản thu nhập',
    'decimal_places'              => 'Số thập phân',
    'exchange_rate_instruction'   => 'Ngoại tệ',
    'source_amount'               => 'Số tiền (source)',
    'destination_amount'          => 'Số tiền (destination)',
    'native_amount'               => 'Native amount',
    'new_email_address'           => 'Địa chỉ email mới',
    'verification'                => 'Xác minh',
    'api_key'                     => 'API key',
    'remember_me'                 => 'Nhớ tôi',
    'liability_type_id'           => 'Loại trách nhiệm pháp lý',
    'interest'                    => 'Lãi',
    'interest_period'             => 'Chu kỳ lãi',

    'source_account_asset'        => 'Tài khoản gửi (asset account)',
    'destination_account_expense' => 'Tài khoản nhận (expense account)',
    'destination_account_asset'   => 'Tài khoản nhận (asset account)',
    'source_account_revenue'      => 'Tài khoản gửi (revenue account)',
    'type'                        => 'Loại',
    'convert_Withdrawal'          => 'Phí rút tiền',
    'convert_Deposit'             => 'Phí gửi tiền',
    'convert_Transfer'            => 'Phí chuyển khoản',

    'amount'                      => 'Số tiền',
    'foreign_amount'              => 'Ngoại tệ',
    'existing_attachments'        => 'Có sẵn',
    'date'                        => 'Ngày',
    'interest_date'               => 'Ngày lãi',
    'book_date'                   => 'Ngày đặt sách',
    'process_date'                => 'Ngày xử lý',
    'category'                    => 'Danh mục',
    'tags'                        => 'Thẻ (tag)',
    'deletePermanently'           => 'Xóa vĩnh viễn',
    'cancel'                      => 'Hủy bỏ',
    'targetdate'                  => 'Ngày muốn',
    'startdate'                   => 'Ngày bắt đầu',
    'tag'                         => 'Thẻ (tag)',
    'under'                       => 'Dưới',
    'symbol'                      => 'Ký hiệu',
    'code'                        => 'Mã',
    'iban'                        => 'IBAN',
    'account_number'              => 'Số tài khoản',
    'creditCardNumber'            => 'Số thẻ tín dụng',
    'has_headers'                 => 'Tiêu đề',
    'date_format'                 => 'Định dạng ngày',
    'specifix'                    => 'Bank- or file specific fixes',
    'attachments[]'               => 'File đính kèm',
    'store_new_withdrawal'        => 'Lưu trữ rút tiền mới',
    'store_new_deposit'           => 'Lưu trữ tiền gửi mới',
    'store_new_transfer'          => 'Lưu trữ chuyển mới',
    'add_new_withdrawal'          => 'Thêm rút tiền mới',
    'add_new_deposit'             => 'Thêm tiền gửi mới',
    'add_new_transfer'            => 'Thêm chuyển tiền mơi',
    'title'                       => 'Tiêu đề',
    'notes'                       => 'Ghi chú',
    'filename'                    => 'Tên file',
    'mime'                        => 'Mime type',
    'size'                        => 'Kích thước',
    'trigger'                     => 'Kích hoạt',
    'stop_processing'             => 'Dừng xử lý',
    'start_date'                  => 'Bắt đầu',
    'end_date'                    => 'Kết thúc',
    'include_attachments'         => 'Bao gồm file đã upload',
    'include_old_uploads'         => 'Bao gồm dữ liệu đã nhập',
    'delete_account'              => 'Xóa tài khoản ":name"',
    'delete_bill'                 => 'Xóa hóa đơn ":name"',
    'delete_budget'               => 'Xóa ngân sách ":name"',
    'delete_category'             => 'Xóa danh mục ":name"',
    'delete_currency'             => 'Xóa tiền tệ ":name"',
    'delete_journal'              => 'Xóa giao dịch với mô tả ":description"',
    'delete_attachment'           => 'Xóa file đính kèm ":name"',
    'delete_rule'                 => 'Xóa quy tắc ":title"',
    'delete_rule_group'           => 'Xóa nhóm quy tắc ":title"',
    'delete_link_type'            => 'Xóa loại liên kết ":name"',
    'delete_user'                 => 'Xóa người dùng ":email"',
    'delete_recurring'            => 'Xóa giao dịch định kỳ ":title"',
    'user_areYouSure'             => 'Nếu bạn xóa người dùng ":email", mọi thứ sẽ biến mất không thể phục hồi. Nếu bạn tự xóa tài khoản của mình bạn sẽ không truy cập bằng tài khoản này được.',
    'attachment_areYouSure'       => 'Bạn có chắc chắn muốn xóa tệp đính kèm có tên ":name"?',
    'account_areYouSure'          => 'Bạn có chắc chắn muốn xóa tài khoản có tên ":name"?',
    'bill_areYouSure'             => 'Bạn có chắc chắn muốn xóa hóa đơn có tên ":name"?',
    'rule_areYouSure'             => 'Bạn có chắc chắn muốn xóa quy tắc có tiêu đề ":title"?',
    'ruleGroup_areYouSure'        => 'Bạn có chắc chắn muốn xóa nhóm quy tắc có tiêu đề ":title"?',
    'budget_areYouSure'           => 'Bạn có chắc chắn muốn xóa ngân sách có tên ":name"?',
    'category_areYouSure'         => 'Bạn có chắc chắn muốn xóa danh mục có tên ":name"?',
    'recurring_areYouSure'        => 'Bạn có chắc chắn muốn xóa giao dịch định kuf có tiêu đề ":title"?',
    'currency_areYouSure'         => 'Bạn có chắc chắn muốn xóa loại tiền có tên ":name"?',
    'piggyBank_areYouSure'        => 'Bạn có chắc chắn muốn xóa heo đất có tên ":name"?',
    'journal_areYouSure'          => 'Bạn có chắc chắn muốn xóa giao dịch được mô tả ":description"?',
    'mass_journal_are_you_sure'   => 'Bạn có chắc chắn muốn xóa những giao dịch này?',
    'tag_areYouSure'              => 'Bạn có chắc chắn muốn xóa thẻ ":tag"?',
    'journal_link_areYouSure'     => 'Bạn có chắc chắn muốn xóa liên kết giữa <a href=":source_link">:source</a> và <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => 'Bạn có chắc chắn muốn xóa loại liên kết ":name" (":inward" / ":outward")?',
    'permDeleteWarning'           => 'Xóa nội dung khỏi Firefly III là vĩnh viễn và không thể hoàn tác.',
    'mass_make_selection'         => 'Bạn vẫn có thể ngăn các mục bị xóa bằng cách xóa hộp kiểm.',
    'delete_all_permanently'      => 'Xóa các mục đã chọn vĩnh viễn',
    'update_all_journals'         => 'Cập nhật những giao dịch này',
    'also_delete_transactions'    => 'Giao dịch duy nhất được kết nối với tài khoản này sẽ bị xóa. Số giao dịch được kết nối với tài khoản này cũng sẽ bị xóa.',
    'also_delete_connections'     => 'Giao dịch duy nhất được liên kết với loại liên kết này sẽ mất kết nối. Số giao dịch được liên kết với loại liên kết này sẽ mất kết nối.',
    'also_delete_rules'           => 'Quy tắc duy nhất được kết nối với nhóm quy tắc này cũng sẽ bị xóa. Quy tắc đếm được kết nối với nhóm quy tắc này cũng sẽ bị xóa.',
    'also_delete_piggyBanks'      => 'Heo đất duy nhất được kết nối với tài khoản này cũng sẽ bị xóa. Heo đất được kết nối với tài khoản này cũng sẽ bị xóa.',
    'bill_keep_transactions'      => 'Giao dịch duy nhất được kết nối với hóa đơn này sẽ không bị xóa. Số giao dịch được kết nối với hóa đơn này sẽ bị xóa.',
    'budget_keep_transactions'    => 'Giao dịch duy nhất được kết nối với ngân sách này sẽ không bị xóa. Các giao dịch được kết nối với ngân sách này sẽ không bị xóa.',
    'category_keep_transactions'  => 'Giao dịch duy nhất được kết nối với danh mục này sẽ không bị xóa. Số giao dịch được kết nối với danh mục này sẽ bị xóa.',
    'recurring_keep_transactions' => 'Giao dịch duy nhất được tạo bởi giao dịch định kỳ này sẽ không bị xóa. Các giao dịch được tạo bởi giao dịch định kỳ này sẽ được xóa bỏ.',
    'tag_keep_transactions'       => 'Giao dịch duy nhất được kết nối với thẻ này sẽ không bị xóa. Đếm các giao dịch được kết nối với thẻ này sẽ không bị xóa.',
    'check_for_updates'           => 'Kiểm tra cập nhật',

    'email'                 => 'Địa chỉ email',
    'password'              => 'Mật khẩu',
    'password_confirmation' => 'Mật khẩu (nhập lại)',
    'blocked'               => 'Đã bị chặn?',
    'blocked_code'          => 'Lý do chặn',
    'login_name'            => 'Đăng nhập',
    'is_owner'              => 'Is admin?',

    // import
    'apply_rules'           => 'Áp dụng quy tắc',
    'artist'                => 'Nhạc sĩ',
    'album'                 => 'Album',
    'song'                  => 'Bài hát',


    // admin
    'domain'                => 'Tên miền',
    'single_user_mode'      => 'Tắt chức năng đăng ký mới',
    'is_demo_site'          => 'Là trang demo',

    // import
    'import_file'           => 'Nhập file',
    'configuration_file'    => 'Cấu hình file',
    'import_file_type'      => 'Nhập loại file',
    'csv_comma'             => 'A comma (,)',
    'csv_semicolon'         => 'A semicolon (;)',
    'csv_tab'               => 'A tab (invisible)',
    'csv_delimiter'         => 'CSV field delimiter',
    'csv_import_account'    => 'Mặc định tài khoản nhập',
    'csv_config'            => 'Cấu hình nhập CSV',
    'client_id'             => 'Client ID',
    'service_secret'        => 'Service secret',
    'app_secret'            => 'App secret',
    'app_id'                => 'App ID',
    'secret'                => 'Secret',
    'public_key'            => 'Public key',
    'country_code'          => 'Mã quốc gia',
    'provider_code'         => 'Ngân hàng hoặc nhà cung cấp dữ liệu',
    'fints_url'             => 'FinTS API URL',
    'fints_port'            => 'Cổng',
    'fints_bank_code'       => 'Mã ngân hàng',
    'fints_username'        => 'Tên người dùng',
    'fints_password'        => 'PIN / Password',
    'fints_account'         => 'FinTS account',
    'local_account'         => 'Firefly III account',
    'from_date'             => 'Từ ngày',
    'to_date'               => 'Đến ngày',


    'due_date'                => 'Ngày đáo hạn',
    'payment_date'            => 'Ngày thanh toán',
    'invoice_date'            => 'Ngày hóa đơn',
    'internal_reference'      => 'Tài liệu tham khảo nội bộ',
    'inward'                  => 'Mô tả bên trong',
    'outward'                 => 'Mô tả bên ngoài',
    'rule_group_id'           => 'Nhóm quy tắc',
    'transaction_description' => 'Mô tả giao dịch',
    'first_date'              => 'Ngày đầu tiên',
    'transaction_type'        => 'Loại giao dịch',
    'repeat_until'            => 'Lặp lại đến',
    'recurring_description'   => 'Mô tả giao dịch định kỳ',
    'repetition_type'         => 'Loại lặp lại',
    'foreign_currency_id'     => 'Ngoại tệ',
    'repetition_end'          => 'Kết thúc lặp lại',
    'repetitions'             => 'Sự lặp lại',
    'calendar'                => 'Lịch',
    'weekend'                 => 'Ngày cuối tuần',
    'client_secret'           => 'Client secret',

    'withdrawal_destination_id' => 'Mô tả tài khoản',
    'deposit_source_id'         => 'Source account',
    'expected_on'               => 'Dự kiến vào',
    'paid'                      => 'Đã thanh toán',

    'auto_budget_type'            => 'Auto-budget',
    'auto_budget_amount'            => 'Auto-budget amount',
    'auto_budget_period'            => 'Auto-budget period',

    'collected' => 'Collected',
    'submitted' => 'Submitted',
    'key' => 'Key',
    'value' => 'Content of record'


];
