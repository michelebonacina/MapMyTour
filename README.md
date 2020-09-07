# MapMyTour
Web Application for managing personal GPS tour.

## In progress


## Standard Point
A Standard Point is the base for every other point types. Contains informations about:
- latitude: the geographical latitude of the point, in decimal format
- longitude: the geographical longitude of the point, in decimal format
- altutide: the elevation of the point, as an integer value

The Standard Point cannot be used standalone; it must be extended by specialized points types.

## Waypoints
A waypoint adds to Standard Point information about:
- name: the name of the place identified by the point
- user: the user who create the waypoint


## Version

### 0.1.0
- Added waypoints management
- Added user authentication
- Added base template

