# SP500_Historic_Constituents

File with a Python variable containing the historic constituent ticker symbols for the Standard &amp; Poor 500 Index starting at year 2000.

The variable is a list of lists. The format is:

```
sp500_tickers=[[<last known valid date>,<ticker>,<ticker>,...],[<last known valid date>,<ticker>,<ticker>,...]]
```

The multi-index file indices.py has only one row per index with the data as of last update. The indices are SP500, SP400, SP600 and NASDAQ100.

The format is simply:

```
variable name = [<ticker>,<ticker>,...]
```

