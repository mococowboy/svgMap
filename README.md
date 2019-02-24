# svgMap
svg php mysql javascript xmlhttprequest

The year was 2011 and I was minding my own business at work when I saw a post my work's intranet site about some beta program that they were developing that was mapping data. "Hmm" I thought, "that sounds interesting". I clicked through and saw that they were using Adobe Flash (it was 2011 after all) and I was disgusted. "Surely! This could be done with open web standards!?". It was at that instant, svgMap was born.

The original SVG was from Wikipedia but I modified it to fix an id to each state path.

I was somewhat more familar with PHP back then so that's what is used as a backend language. The PHP was fairly simple, it just connects to a MySQL database, executes a stored procedure with some parameters fed in from the call from the SVG, and then returns an array with every state's unemployment rate for a given year/month. From that array, colors are then set for each state based on what the unemployment rate was for that state for that year and month.

The schema consists of a single table (unem_rate) as well as the single stored procedure (unem_month). The table design is simple and is:

| Column      | Type        |
| ----------- | ----------- |
| State       | CHAR(2)     |
| Month       | CHAR(3)     |
| Year        | CHAR(4)     |
| Rate        | Decimal(3,1)|

The SVG itself uses vanilla Javascript with no AJAX libraries...and no promise library but hey, it was 2011. The basic user interaction would be that the SVG would load and then each time the user clicked, it'd advanced a month. And since this was developed as a desktop first application, on mobile, it'd zoom in and out with the occasional click being registered. But it did work on my Samsung Galaxy SII which was pretty neat, even in hindsight.

So if you ever want a SVG Map of the United States with some 2011-era Javascript in it, this is the place to go. I don't overly recommend the PHP though but it should still be functional.
