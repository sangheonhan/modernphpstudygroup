<?php

namespace bookwormkr\LogBzip2;

class LogBzip2 extends \Psr\Log\AbstractLogger
{
    private $stream;

    public function __construct($filename)
    {
        $this->stream = new \SplFileObject("compress.bzip2://{$filename}", 'wb');
    }

    public function log($level, $message, array $context = array())
    {
        $this->stream->fwrite(
            date('c').' '.
            strtoupper($level).': '.
            $this->replacePlaceholder($message, $context).PHP_EOL
        );
    }

    private function replacePlaceholder($message, array $context)
    {
        foreach ($context as $search => $replace) {
            $message = str_replace('{'.$search.'}', $replace, $message);
        }

        return $message;
    }
}
