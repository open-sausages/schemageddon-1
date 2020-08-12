## POC for GraphQL 4 performance epic

This is a demo project that contains schemas built in both GraphQL 3 (stable) and [GraphQL 4](https://github.com/silverstripe/silverstripe-graphql/pull/266)
(in development). It aims to reveal the performance gains of the GraphQL 4 rewrite through
apples-to-apples comparison testing.

### Schemas

There are two schemas included:

* **Simple schema**: 5 dataobjects, unversioned, read operations only
* **Complex schema**: 50 dataobjects, versioned, all operations exposed

All dataobjects have 15 fields of varying types.

Half the dataobjects have relations defined, of varying size.

### Building

`$ vendor/bin/sake dev/tasks/build-schema schema=simple`

`$ vendor/bin/sake dev/tasks/build-schema schema=complex`

### Testing

`http://mysite.com/dev/graphiql`

(Choose from either simple/graphql or complex/graphql in the UI)

### Data

Use the included, hacked up `PopulateTask` or just download a snapshot from the 
internal testing instance on Silverstripe Cloud.
