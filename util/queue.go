package util

type Queue struct {
	list   []interface{}
}

func (s *Queue) Enqueue(item interface{}) {
	s.list = append(s.list, item)
}

func (s *Queue) Dequeue() interface{} {
	if len(s.list) > 0 {
		ret := s.list[0]
		s.list = s.list[1:]
		return ret
	}
	return nil
}

func (s *Queue) Size() int {
	return len(s.list)
}

func (s *Queue) Peek() interface{} {
	if len(s.list) > 0 {
		return s.list[0]
	}
	return nil
}

func (s *Queue) Copy() []interface{} {
	if len(s.list) > 0 {
		list := s.list[0:]
		s.list = make([]interface{}, 0)
		return list
	}
	return nil
}
