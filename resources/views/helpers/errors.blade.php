<?php
/**
SOIL CONNECT CONFIDENTIAL Copyright © 2017 Soil Connect, Inc. All Rights Reserved.

NOTICE: All information contained herein is, and remains the property of Soil Connect, Inc.. and its suppliers and licensors, if any. The intellectual and technical concepts contained herein are proprietary to Soil Connect, Inc.. and its suppliers and licensors and are protected by trade secret or copyright law. Dissemination of this information or reproduction of this material is strictly forbidden unless prior written permission is obtained from Soil Connect, Inc.
*/
?>
<script>
    $(document).ready(function() {
        @if ($errors->any() ?? false)
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}');
            @endforeach
        @endif

        @if(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif

        @if(Session::has('status'))
            toastr.success('{{ Session::get('status') }}');
        @endif

        @if(Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @endif
    });
</script>