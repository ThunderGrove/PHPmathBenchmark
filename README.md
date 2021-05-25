# PHPmathBenchmark
A tool for benchmarking PHP math performence for comparing the same hardware with PHP compiled with different optimazation flags.


##NOTE 1:##
This is not the best way to do benchmarking because mulipel runs of the tests on same hardware with same optimazation can return different results with up to 15% difference. So a small difference when comparing resluts from PHP compiled with different optimazations may actually mean no performence difference.


##NOTE 2:##
PHP require other packages and the optimazation flags they have been compiled with may also impact test results e.g. Libtool compiled with -O2 may give lower PHP test result than Libtool compiled with -O3.
