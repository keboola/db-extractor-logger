<?php

declare(strict_types=1);

namespace Keboola\DbExtractorLogger;

use Keboola\Csv\CsvFile;

class LineFormatter extends \Monolog\Formatter\LineFormatter
{
    /**
     * @param CsvFile|array $data
     * @return array|string
     */
    protected function normalize($data, $depth = 0)
    {
        if ($data instanceof CsvFile) {
            return 'csv file: ' . $data->getFilename();
        } else {
            return parent::normalize($data, $depth);
        }
    }
}
