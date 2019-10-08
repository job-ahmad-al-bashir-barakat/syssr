<?php

if(! function_exists('latin1ToUtf8Recursively'))
{
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    function latin1ToUtf8Recursively($dat)
    {
        if (is_string($dat)) {
            return utf8_encode($dat);
        } elseif (is_array($dat)) {
            $ret = [];
            foreach ($dat as $i => $d) $ret[ $i ] = latin1ToUtf8Recursively($d);

            return $ret;
        } elseif (is_object($dat)) {
            foreach ($dat as $i => $d) $dat->$i = latin1ToUtf8Recursively($d);

            return $dat;
        } else {
            return $dat;
        }
    }
}

