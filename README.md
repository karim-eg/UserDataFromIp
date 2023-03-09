# Get User Data From Ip
Get User Country, Continent, Timezone, Country Currency From Ip address.

# Usage
Call `index.php` file and the class will detect the user Ip from User-agent. </br>
if you know the user ip you can modify the class to send the Ip directly.  </br>
Results Are In JSON Format to be easy to parse.

## Output example
the returned data will be like:

```json
{
  "ip": "156.000.000.000", 
  "country": "Egypt", 
  "timezone": "Africa/Cairo", 
  "continent": "Africa", 
  "currency": "E£"
}
```

## License
Powered & developed by [Encept Ltd](https://encept.co). </br>
[Apache License](https://www.apache.org/licenses/LICENSE-2.0)
